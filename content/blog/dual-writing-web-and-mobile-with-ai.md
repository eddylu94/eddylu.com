---
title: "Dual Writing Web and Mobile with AI"
date: 2026-03-03
cover: /images/blog/20260303/blog20260303_diagram.png
coverCaption: "One backend serving web and mobile (iOS + Android) clients"
---

As someone who enjoys building side projects, one thing I've realized is that AI has dramatically reduced the cost of choosing between web and mobile development.

Historically, this was a real tradeoff.

### Web

- Lower friction onboarding
- Instant distribution
- Easier iteration

### Mobile

- Push notifications
- Better retention
- Native UX expectations

Frameworks like React Native helped reduce the iOS vs Android split, though they introduced their own constraints, something [Airbnb documented](https://medium.com/airbnb-engineering/sunsetting-react-native-333cb8e0d85a) when they sunset React Native due to performance and organizational challenges.

Today, however, the more interesting shift is not framework-level abstraction. It's **dual writing**.

With tools like Cursor or Claude Code, you can develop on one platform and mirror the architecture to another quickly, not by blindly generating code, but by guiding it.

## How I've Approached It

Start by documenting a lightweight PRD and ERD. AI-assisted drafts are fine; clarity up front reduces drift later.

Build one surface first: I typically start with web.

Ask the AI to mirror changes onto mobile.

Force the tool to ask clarifying questions before making decisions:

- What backend stack? Node + TypeScript?
- Express or something else?
- Expo for mobile?
- How should auth be handled across both clients?

I also instruct the model to proceed iteratively and confirm before making structural changes.

My setup is intentionally simple:

- One backend service
- One web client
- One mobile client

To keep changes readable, I prefix commit messages:

- `Server:`
- `Web:`
- `Mobile:`

To enforce dual updates going forward, you can add guardrails:

- `CLAUDE.md` or `AGENTS.md` describing project conventions
- CI rules that prevent divergence

## A Practical Caveat

This workflow is powerful for side projects and prototypes. However, for full-fledged professional applications (especially ones with large teams, complex domains, performance constraints, or strict compliance requirements), this approach is not yet a complete replacement for traditional architecture, QA processes, and deep engineering expertise.

AI will likely tackle more of those challenges over time, but for now it's best treated as an amplifier, not an autopilot.

## Why This Matters

This kind of cross-platform iteration, quickly moving between web and mobile with consistency, would have been slow and fragile even six months ago. Two years ago, it would have felt unrealistic for a solo builder.

Now it's practical.

And that changes what's worth attempting.

## References

Sunsetting React Native - Airbnb Engineering:
[https://medium.com/airbnb-engineering/sunsetting-react-native-333cb8e0d85a](https://medium.com/airbnb-engineering/sunsetting-react-native-333cb8e0d85a)
