---
title: "Temporal Launch & Learn: Building Durable GenAI Applications"
date: 2025-11-18
cover: /images/blog/20251118/blog20251118_module1.png
coverCaption: "Temporal Launch & Learn: San Francisco"
---

This week, I attended the [Temporal Launch & Learn](https://temporal.io/pages/temporal-launch-and-learn-sf) conference in San Francisco. The conference focused on how developers can use Temporal to build reliable, long-running GenAI applications.

![Conference agenda](/images/blog/20251118/blog20251118_agenda.png)

*Conference agenda*

Here are some of the sessions I attended:

- Workshop Module: *Foundations of GenAI Applications & Temporal*
- Featured Speaker: *Ryan Albert, Founding Engineer, Speakeasy*

## Workshop Module: Foundations of GenAI Applications & Temporal

![Cornelia Davis presenting the Foundations of GenAI Applications & Temporal workshop](/images/blog/20251118/blog20251118_module1.png)

*Cornelia Davis presenting the Foundations of GenAI Applications & Temporal workshop*

### Overview

This session introduced the **foundations of building GenAI applications using Temporal**, blending LLM-based workflows with distributed systems reliability. It emphasized how Temporal simplifies GenAI orchestration by handling retries, durability, and execution flow behind the scenes.

The morning covered:

- How **LLMs** and **Temporal** integrate to create reliable, long-running AI apps.
- Differences between **fixed-flow** (predefined sequence) and **agentic-loop** (LLM-directed) systems.
- Hands-on setup in **GitHub Codespaces** with prebuilt Jupyter notebooks and exercises.
- A walkthrough of invoking an LLM (OpenAI Completions API) and storing the results as a PDF.

### Key Topics & Learnings

#### GenAI Application Structure

**Fixed-flow:** calls LLMs at defined steps, processes outputs deterministically.

**Agentic-loop:** gives the LLM autonomy to determine subsequent actions.

Both have practical value; not every system needs full autonomy.

#### LLM Interaction Fundamentals

Calls made via APIs (e.g., GPT-4/5, Claude).

Importance of **context windows**: models are stateless, so context must be preserved across calls.

Early examples used the *Completions API*, later transitioning to the *Responses API* for tool-use and planning.

#### Hands-on Coding Notes

Jupyter notebooks were used to run Python examples inside **GitHub Codespaces** (no local setup required).

The first exercise walked through prompting an LLM (`give me five facts about elephants`) and outputting the result as a **PDF report**.

Participants practiced calling LLM APIs, chaining results, and using a small `generate_pdf()` utility to simulate downstream processing.

Follow-up exercises demonstrated creating `.env` files, adding OpenAI keys, and working through additional notebooks covering foundations and adding durability to workflows.

#### Durability Concepts Introduced

AI systems are "distributed systems on steroids."

Temporal's core abstractions (*workflows*, *activities*, *signals*, and *queries*) form the backbone of durable GenAI orchestration.

Temporal provides out-of-the-box recovery for failed API calls, retries for rate limits, and consistency across human or system interruptions.

### Notable Quotes

> "Don't feel like you must give agency to the LLM; fixed flows still have tremendous value."

> "These AI systems are distributed systems on steroids."

## Featured Speaker: Ryan Albert, Founding Engineer, Speakeasy

![Ryan Albert (Speakeasy) presenting how Temporal is used to power MCP servers at Speakeasy](/images/blog/20251118/blog20251118_featured.png)

*Ryan Albert (Speakeasy) presenting how Temporal is used to power MCP servers at Speakeasy*

### Topic: *Building MCP Servers with Temporal*

Ryan Albert's session showcased how **Speakeasy** uses Temporal to power **MCP (Model Context Protocol)** servers, a standardized way for LLMs to access tools and APIs.

### Highlights

#### What is MCP?

MCP (Model Context Protocol) defines how models access external tools, similar to OpenAPI but built for LLM integrations. It standardizes tool schemas, parameters, and interactions.

#### Speakeasy's Use of Temporal

Temporal powers asynchronous and durable tasks behind MCP servers.

Enables complex, long-lived tool invocations without losing state.

Used for workflows like job execution, event-driven processing, and approvals.

#### Demo Walkthrough

Built a live **TypeScript-based MCP server** wrapping the Temporal Client API.

Exposed tools for querying active Temporal workflows and fetching workflow metadata.

Showed live deployment and integration with Claude via VS Code.

#### Future Roadmap

**Dynamic MCP servers** to reduce context window size using semantic tool discovery.

**Human approval workflows**: using Temporal signals for action verification before running critical tools.

**Task-based long-running workflows** coming to the MCP spec (e.g., `getTasks`, `listTasks`, `cancelTasks` RPCs).

MCP and Temporal together make long-running, fault-tolerant LLM agents practical.

### Memorable Quotes

> "Temporal's logical workflows map perfectly to MCP's new long-running task spec; it's a match made in heaven."

> "Now the robots are reading our docstrings." (on auto-generating MCP tool schemas from TypeScript docstrings)

> "With Temporal, you can stop worrying about process boundaries; workflows just keep going."

## Key Takeaways

- Temporal enables **durable GenAI applications** that can survive API errors, rate limits, or downtime.
- Developers should think in **logical workflows**, not physical processes.
- **MCP + Temporal** = the future of tool-driven AI agents.
- Even "fixed-flow" AI apps offer strong business value; agentic loops come later.
- Temporal's SDKs abstract distributed system complexity, letting developers focus purely on business logic.
