import { NextRequest, NextResponse } from "next/server";
import crypto from "crypto";
import { query } from "@/lib/db";

export async function POST(request: NextRequest) {
  try {
    const { path } = await request.json();

    const ip =
      request.headers.get("x-forwarded-for")?.split(",")[0]?.trim() ??
      request.headers.get("x-real-ip") ??
      "unknown";
    const ipHash = crypto.createHash("sha256").update(ip).digest("hex");
    const safePath = typeof path === "string" ? path.slice(0, 255) : "/";

    await query("INSERT INTO page_views (path, ip_hash) VALUES (?, ?)", [
      safePath,
      ipHash,
    ]);

    return NextResponse.json({ ok: true });
  } catch {
    return NextResponse.json({ ok: false }, { status: 500 });
  }
}
