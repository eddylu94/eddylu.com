---
title: "Ship AI 2025 Conference Takeaways"
date: 2025-10-26
cover: /images/blog/20251026/blog20251026_conference.png
coverCaption: "Ship AI 2025 Conference"
---

This Thursday, I had the opportunity to attend [Ship AI 2025](https://vercel.com/ship/ai), Vercel's conference focused on building AI agents at scale. The theme was "Agents Made Simple: One SDK, Any Model," with the goal of showing how to build, run, and scale real AI agents from infrastructure to enterprise adoption.

The atmosphere at the conference was intense. The black and white pixelated animations everywhere reminded me of the video game Watchdogs by Ubisoft, creating an edgy, futuristic tech vibe. Unfortunately, I had to leave mid-way through the conference due to work obligations, but I was able to catch a few key sessions that provided valuable insights into the current state of AI agent development.

## Keynote — Product Announcements & Demos

![CEO Guillermo Rauch during keynote](/images/blog/20251026/blog20251026_keynote.png)

*CEO Guillermo Rauch during keynote*

The keynote was delivered by a few folks including CEO Guillermo Rauch and focused on addressing a fundamental problem in modern AI development.

### Problem Statement

Modern AI agents need to:

- Reason and make complex decisions
- Call tools and make API requests
- Wait for events and handle asynchronous operations
- Maintain and resume state across sessions

They require durable infrastructure including queues, databases, and comprehensive observability. Traditional orchestration of these systems results in messy, microservice-heavy architectures that are difficult to manage.

### Vercel's Solution: Workflow Development Kit (WDK)

Vercel announced the **Workflow Dev Kit**, a new open-source framework for building durable, reliable, observable AI apps and agents in TypeScript.

The key innovation is simplifying the mental model: instead of orchestrating complex microservices, developers can write a *single durable function*.

The framework uses two main directives:

- `useWorkflow()` wraps your function to make it resumable and stateful
- `useStep()` defines background tasks or LLM/tool calls

Each step is compiled into its own API route and runs via background queues (resilient by default). The framework includes automatic retries, resumable state, and full observability built in.

It's open source and works across frameworks (Next.js, Nitro, Hono, etc.), and deploys automatically on Vercel's AI Cloud with event logs, versioning, and tracing.

Vercel is already using this internally for v0.dev, their own agent, and they've seen early adoption from companies like Mandolin in healthcare.

Their tagline captures it well:

> "What orchestrating complex microservices wishes it could be."

### Vercel AI Cloud + Agent Marketplace

#### AI Cloud

A unified platform to run real-world AI agents at scale:

- Combines SDKs, Workflows, observability, and deployment automation
- "Ship AI agents like you ship web apps"

#### Agent Marketplace

Vercel is building an ecosystem for "Agent-as-a-Service" where developers can discover and connect pre-built agents/tools built for the Vercel ecosystem.

Partners include: Hop, RabbitCard, Sorcery, Braintrust, BrowserUse, DeepLinkScope, Current, LLM Cubics, and MixBread. Agents run natively on Vercel's AI Cloud.

> "Sometimes the best agent is one you don't have to build from scratch."

### How to Decide What Agents to Build

Malta from Vercel shared a practical framework for identifying valuable agents:

1. **Ask employees:**
   - "What do you hate most about your job?"
   - "What busy work would you love to never do again?"
2. Automate *those exact tasks*

This approach typically results in:

- Improved employee satisfaction
- Company productivity scaling without headcount growth

### Example 1: Lead Processing Agent (Open-Sourced)

This agent was built to automate sales lead enrichment. It reduces what used to take 15 minutes of manual data lookup to seconds.

The workflow:

1. Qualifies or filters out spam/support leads
2. Gathers context from LinkedIn & Google via sub-agents
3. Drafts personalized follow-ups for sales reps
4. Syncs results to Salesforce

Outcome: saved **hundreds of hours/month**; more responsive GTM motion. Vercel has open-sourced this as a template for custom sales agents.

### Example 2: Abuse Agent (Internal Use)

This agent supports their Trust & Safety team. It reviews phishing or impersonation reports, does context gathering and pattern matching, then summarizes findings with a confidence score and sends structured output to Salesforce. A human stays in the loop for final action.

Result: **15% reduction in case review time**. Not open-sourced yet due to adversarial abuse risks.

### Example 3: Slack BI Agent (Open-Sourced)

This is a Slack-integrated Business Intelligence agent. It translates natural language to SQL using company-specific schema. This eliminates dependency on centralized data teams. The custom semantic catalog lets the agent "understand" internal data relationships.

This has been open-sourced for developers to adapt.

The core insight from these examples:

> "Agents are a new kind of software. We have to rebuild our intuition for what can be automated."

### Program Launch: "An Agent on Every Desk"

Vercel announced a new initiative to help enterprises build their first successful agent. It includes:

- Joint scoping with Vercel engineers
- Templates from internal agents
- Forward-deployed support to ensure production readiness

## Operator Panel — Anthropic × Databricks × Stripe

![Operator Panel with product leads from Vercel, Anthropic, Databricks, Stripe](/images/blog/20251026/blog20251026_panel.png)

*Operator Panel with product leads from Vercel, Anthropic, Databricks, Stripe*

A panel discussion with product leads discussing real-world agent use cases and AI transformation.

**Panelists:**

- Jeanne Grosser from Vercel
- Kate Jensen from Anthropic
- Arjun Rajeswaran from Databricks / Neon
- Jeff Weinstein from Stripe

### Most Transformative Agent Use Cases

**Anthropic:** Agents working autonomously overnight, referred to as "your co-worker on the other side of the world." Use cases include:

- KYC automation
- Insurance claims processing
- Regulatory document summarization (from 3 months → 15 minutes)

**Databricks / Neon:** Vercel's v0.dev as a generative app builder, described as "text agents that generate apps." They predict millions of micro-apps will require millions of databases. "V0 is ready for enterprise; enterprise isn't ready for v0."

**Stripe:**

- Consumer: personalized shopping and instant checkout in ChatGPT via Stripe + OpenAI integration
- Enterprise: hospital supply chain automation where a 50-person team was replaced by an agent-based reordering system

### Internal Agents (Dogfooding)

**Anthropic:** "Bob," the sales coach agent, reviews every sales call and sends auto-feedback emails. Summaries help managers focus training and enablement.

**Databricks / Neon:** Data democratization agents auto-build dashboards and answer queries like "Top 5 customers?"

**Stripe:** "Minion" agents fix bugs from Slack messages, create PRs, screenshots, even GIFs. They're moving toward autonomous code maintenance.

**Vercel:** DealBot analyzes lost deals and provides brutally honest feedback loops to enable agile sprints for GTM improvement.

### AI Transformation Framework (Anthropic)

Kate shared three strategic layers for AI transformation:

1. **Empower individuals** (ChatGPT/Claude for enterprise)
2. **Transform core ops** (AI applied to biggest cost or revenue levers)
3. **Rebuild products** (AI-native, "AGI-built" software)

Success requires ruthless prioritization, executive sponsorship, and change management.

### Governance & Safety

Each company takes a different approach to governance:

- **Anthropic:** Mix of dashboards, surveys, human checks. MCP servers critical for safe data routing.
- **Databricks:** Unified storage architecture with shared audit trails. Challenges in maintaining control across environments.
- **Stripe:** Internal proxy layer for safe LLM use. New challenge: defining rules for agents that write.

### Data & Storage for Agents

Agents now create 10–100+ database checkpoints like "commits in code." Infrastructure is being built for cheap, fast, scalable checkpoints to reduce costs. Databricks outlined two data models: user-state databases (context/memory) and agent-created databases (checkpoints, metadata).

### Stripe's Agent Commerce Protocol

Stripe announced a new Internet primitive for agentic transactions (jointly developed with OpenAI, open-sourced). Businesses can expose inventory, checkout flows, and payment APIs to agents, enabling autonomous transactions. Currently live for single merchant, one-time purchases; roadmap includes multi-merchant carts and subscriptions. This enables "machine-to-machine commerce" where agents transact autonomously.

### Business Model Shifts

Business models are shifting:

- **Anthropic:** Moving to project-based / outcome-based pricing
- **Stripe:** Introducing token-based pricing + pass-through billing for LLMs
- Costs dramatically reduced: "An agent that used to cost millions to build now costs $20K/year to run"

## Key Takeaways

The conference reinforced several key themes:

- **Agents are the new software primitive:** enterprises should rebuild their intuition around what can be automated, starting with tasks employees hate most
- **Infrastructure is converging:** Vercel's AI SDK and Workflows unify queues, state management, retries, and observability into one developer experience
- **Open source drives adoption:** companies are open-sourcing internal agents as templates
- **Autonomous execution transforms timelines:** agents working overnight are transforming operational timelines from months to minutes
- **Commerce is becoming agentic:** Stripe's Agent Commerce Protocol enables direct agent-to-business transactions
- **Governance remains critical but unsolved:** companies are using various approaches: proxy layers, unified storage, MCP servers
- **Business models are shifting:** from seat-based SaaS to outcome-based pricing, with costs dramatically reduced

## Final Thoughts

While I left early due to work obligations, the sessions I attended provided a clear picture of where AI agent technology is heading. The energy and buzz at the conference was palpable, with a real sense that we're at an inflection point where AI agents are becoming a fundamental building block of software, similar to how APIs and cloud services transformed software development in previous decades.

Several memorable quotes that stuck with me:

- "Every one of you is building an agent"
- "We're seeing the shift from reading to writing agents"
- "Ask your employees what they hate: that's your next agent"
- "Agents are a new kind of software"
- "The enterprise isn't ready for v0, but it's coming fast"

For anyone working with AI or building software, this is an exciting time to be in the field. The infrastructure is rapidly maturing, real use cases are emerging, and the potential for transformation is significant.
