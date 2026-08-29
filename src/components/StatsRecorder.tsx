"use client";

import { usePathname } from "next/navigation";
import { useEffect } from "react";

export default function StatsRecorder() {
  const pathname = usePathname();

  useEffect(() => {
    fetch("/api/stats/hit", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ path: pathname }),
      keepalive: true,
    }).catch(() => {});
  }, [pathname]);

  return null;
}
