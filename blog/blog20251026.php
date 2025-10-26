<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Eddy Lu</title>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/css/blog-post.css">
  </head>
  <body>
    <div id="page_wrapper">
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/header.php'; ?>
      <div id="body_wrapper">
        <div id="container">
          <div class="blog-story">
            <div style="font-weight: bold; font-size: 48px;">Ship AI 2025 Conference Takeaways</div>
            <div style="font-style: italic; margin-top: 22px;">Saturday, October 26, 2025</div>
          </div>
          <div class="blog-story" style="line-height: 1.50; margin-top: 50px">

            <img class="blogImage" src="/assets/images/blog/20251026/blog20251026_conference.png" />
            <span class="caption">Ship AI 2025 Conference</span>

            <p>This Thursday, I had the opportunity to attend <a target="_blank" href="https://vercel.com/ship/ai">Ship AI 2025</a>, Vercel's conference focused on building AI agents at scale.
            The theme was "Agents Made Simple: One SDK, Any Model," with the goal of showing how to build, run, and scale real AI agents from infrastructure to enterprise adoption.</p>

            <p>The atmosphere at the conference was intense. The black and white pixelated animations everywhere reminded me of the video game Watchdogs by Ubisoft, creating an edgy, futuristic tech vibe.
            Unfortunately, I had to leave mid-way through the conference due to work obligations, but I was able to catch a few key sessions that provided valuable insights into the current state of AI agent development.</p>

            <h1>Keynote — Product Announcements & Demos</h1>

            <img class="blogImage" src="/assets/images/blog/20251026/blog20251026_keynote.png" />
            <span class="caption">CEO Guillermo Rauch during keynote</span>

            <p>The keynote was delivered by a few folks including CEO Guillermo Rauch and focused on addressing a fundamental problem in modern AI development.</p>

            <h2>Problem Statement</h2>

            <p>Modern AI agents need to:
            <ul>
              <li>Reason and make complex decisions</li>
              <li>Call tools and make API requests</li>
              <li>Wait for events and handle asynchronous operations</li>
              <li>Maintain and resume state across sessions</li>
            </ul>

            They require durable infrastructure including queues, databases, and comprehensive observability.
            Traditional orchestration of these systems results in messy, microservice-heavy architectures that are difficult to manage.</p>

            <h2>Vercel's Solution: Workflow Development Kit (WDK)</h2>

            <p>Vercel announced the <strong>Workflow Dev Kit</strong>, a new open-source framework for building durable, reliable, observable AI apps and agents in TypeScript.</p>

            <p>The key innovation is simplifying the mental model: instead of orchestrating complex microservices, developers can write a <em>single durable function</em>.</p>

            <p>The framework uses two main directives:
            <ul>
              <li><code>useWorkflow()</code> wraps your function to make it resumable and stateful</li>
              <li><code>useStep()</code> defines background tasks or LLM/tool calls</li>
            </ul>

            Each step is compiled into its own API route and runs via background queues (resilient by default).
            The framework includes automatic retries, resumable state, and full observability built in.</p>

            <p>It's open source and works across frameworks (Next.js, Nitro, Hono, etc.), and deploys automatically on Vercel's AI Cloud with event logs, versioning, and tracing.</p>

            <p>Vercel is already using this internally for v0.dev, their own agent, and they've seen early adoption from companies like Mandolin in healthcare.</p>

            <p>Their tagline captures it well:</p>

            <blockquote>"What orchestrating complex microservices wishes it could be."</blockquote>

            <h2>Vercel AI Cloud + Agent Marketplace</h2>

            <h3>AI Cloud</h3>

            <p>A unified platform to run real-world AI agents at scale:
            <ul>
              <li>Combines SDKs, Workflows, observability, and deployment automation</li>
              <li>"Ship AI agents like you ship web apps"</li>
            </ul>

            <h3>Agent Marketplace</h3>

            <p>Vercel is building an ecosystem for "Agent-as-a-Service" where developers can discover and connect pre-built agents/tools built for the Vercel ecosystem.</p>

            <p>Partners include: Hop, RabbitCard, Sorcery, Braintrust, BrowserUse, DeepLinkScope, Current, LLM Cubics, and MixBread.
            Agents run natively on Vercel's AI Cloud.</p>

            <blockquote>"Sometimes the best agent is one you don't have to build from scratch."</blockquote>

            <h2>How to Decide What Agents to Build</h2>

            <p>Malta from Vercel shared a practical framework for identifying valuable agents:</p>

            <ol>
              <li><strong>Ask employees:</strong>
                <ul>
                  <li>"What do you hate most about your job?"</li>
                  <li>"What busy work would you love to never do again?"</li>
                </ul>
              </li>
              <li>Automate <em>those exact tasks</em></li>
            </ol>

            <p>This approach typically results in:
            <ul>
              <li>Improved employee satisfaction</li>
              <li>Company productivity scaling without headcount growth</li>
            </ul>

            <h2>Example 1: Lead Processing Agent (Open-Sourced)</h2>

            <p>This agent was built to automate sales lead enrichment.
            It reduces what used to take 15 minutes of manual data lookup to seconds.</p>

            <p>The workflow:
            <ol>
              <li>Qualifies or filters out spam/support leads</li>
              <li>Gathers context from LinkedIn & Google via sub-agents</li>
              <li>Drafts personalized follow-ups for sales reps</li>
              <li>Syncs results to Salesforce</li>
            </ol>

            <p>Outcome: saved <strong>hundreds of hours/month</strong>; more responsive GTM motion.
            Vercel has open-sourced this as a template for custom sales agents.</p>

            <h2>Example 2: Abuse Agent (Internal Use)</h2>

            <p>This agent supports their Trust & Safety team.
            It reviews phishing or impersonation reports, does context gathering and pattern matching, then summarizes findings with a confidence score and sends structured output to Salesforce.
            A human stays in the loop for final action.</p>

            <p>Result: <strong>15% reduction in case review time</strong>.
            Not open-sourced yet due to adversarial abuse risks.</p>

            <h2>Example 3: Slack BI Agent (Open-Sourced)</h2>

            <p>This is a Slack-integrated Business Intelligence agent.
            It translates natural language to SQL using company-specific schema.
            This eliminates dependency on centralized data teams.
            The custom semantic catalog lets the agent "understand" internal data relationships.</p>

            <p>This has been open-sourced for developers to adapt.</p>

            <p>The core insight from these examples:</p>

            <blockquote>"Agents are a new kind of software. We have to rebuild our intuition for what can be automated."</blockquote>

            <h2>Program Launch: "An Agent on Every Desk"</h2>

            <p>Vercel announced a new initiative to help enterprises build their first successful agent.
            It includes:
            <ul>
              <li>Joint scoping with Vercel engineers</li>
              <li>Templates from internal agents</li>
              <li>Forward-deployed support to ensure production readiness</li>
            </ul>

            <h1>Operator Panel — Anthropic × Databricks × Stripe</h1>

            <img class="blogImage" src="/assets/images/blog/20251026/blog20251026_panel.png" />
            <span class="caption">Operator Panel with product leads from Vercel, Anthropic, Databricks, Stripe</span>

            <p>A panel discussion with product leads discussing real-world agent use cases and AI transformation.</p>

            <p><strong>Panelists:</strong>
            <ul>
              <li>Jeanne Grosser from Vercel</li>
              <li>Kate Jensen from Anthropic</li>
              <li>Arjun Rajeswaran from Databricks / Neon</li>
              <li>Jeff Weinstein from Stripe</li>
            </ul>

            <h2>Most Transformative Agent Use Cases</h2>

            <p><strong>Anthropic:</strong> Agents working autonomously overnight, referred to as "your co-worker on the other side of the world."
            Use cases include:
            <ul>
              <li>KYC automation</li>
              <li>Insurance claims processing</li>
              <li>Regulatory document summarization (from 3 months → 15 minutes)</li>
            </ul>

            <p><strong>Databricks / Neon:</strong> Vercel's v0.dev as a generative app builder, described as "text agents that generate apps."
            They predict millions of micro-apps will require millions of databases.
            "V0 is ready for enterprise; enterprise isn't ready for v0."</p>

            <p><strong>Stripe:</strong> 
            <ul>
              <li>Consumer: personalized shopping and instant checkout in ChatGPT via Stripe + OpenAI integration</li>
              <li>Enterprise: hospital supply chain automation where a 50-person team was replaced by an agent-based reordering system</li>
            </ul>

            <h2>Internal Agents (Dogfooding)</h2>

            <p><strong>Anthropic:</strong> "Bob," the sales coach agent, reviews every sales call and sends auto-feedback emails.
            Summaries help managers focus training and enablement.</p>

            <p><strong>Databricks / Neon:</strong> Data democratization agents auto-build dashboards and answer queries like "Top 5 customers?"</p>

            <p><strong>Stripe:</strong> "Minion" agents fix bugs from Slack messages, create PRs, screenshots, even GIFs.
            They're moving toward autonomous code maintenance.</p>

            <p><strong>Vercel:</strong> DealBot analyzes lost deals and provides brutally honest feedback loops to enable agile sprints for GTM improvement.</p>

            <h2>AI Transformation Framework (Anthropic)</h2>

            <p>Kate shared three strategic layers for AI transformation:</p>

            <ol>
              <li><strong>Empower individuals</strong> (ChatGPT/Claude for enterprise)</li>
              <li><strong>Transform core ops</strong> (AI applied to biggest cost or revenue levers)</li>
              <li><strong>Rebuild products</strong> (AI-native, "AGI-built" software)</li>
            </ol>

            <p>Success requires ruthless prioritization, executive sponsorship, and change management.</p>

            <h2>Governance & Safety</h2>

            <p>Each company takes a different approach to governance:
            <ul>
              <li><strong>Anthropic:</strong> Mix of dashboards, surveys, human checks. MCP servers critical for safe data routing.</li>
              <li><strong>Databricks:</strong> Unified storage architecture with shared audit trails. Challenges in maintaining control across environments.</li>
              <li><strong>Stripe:</strong> Internal proxy layer for safe LLM use. New challenge: defining rules for agents that write.</li>
            </ul>

            <h2>Data & Storage for Agents</h2>

            <p>Agents now create 10–100+ database checkpoints like "commits in code."
            Infrastructure is being built for cheap, fast, scalable checkpoints to reduce costs.
            Databricks outlined two data models: user-state databases (context/memory) and agent-created databases (checkpoints, metadata).</p>

            <h2>Stripe's Agent Commerce Protocol</h2>

            <p>Stripe announced a new Internet primitive for agentic transactions (jointly developed with OpenAI, open-sourced).
            Businesses can expose inventory, checkout flows, and payment APIs to agents, enabling autonomous transactions.
            Currently live for single merchant, one-time purchases; roadmap includes multi-merchant carts and subscriptions.
            This enables "machine-to-machine commerce" where agents transact autonomously.</p>

            <h2>Business Model Shifts</h2>

            <p>Business models are shifting:
            <ul>
              <li><strong>Anthropic:</strong> Moving to project-based / outcome-based pricing</li>
              <li><strong>Stripe:</strong> Introducing token-based pricing + pass-through billing for LLMs</li>
              <li>Costs dramatically reduced: "An agent that used to cost millions to build now costs $20K/year to run"</li>
            </ul>

            <h1>Key Takeaways</h1>

            <p>The conference reinforced several key themes:</p>

            <ul>
              <li><strong>Agents are the new software primitive:</strong> enterprises should rebuild their intuition around what can be automated, starting with tasks employees hate most</li>
              <li><strong>Infrastructure is converging:</strong> Vercel's AI SDK and Workflows unify queues, state management, retries, and observability into one developer experience</li>
              <li><strong>Open source drives adoption:</strong> companies are open-sourcing internal agents as templates</li>
              <li><strong>Autonomous execution transforms timelines:</strong> agents working overnight are transforming operational timelines from months to minutes</li>
              <li><strong>Commerce is becoming agentic:</strong> Stripe's Agent Commerce Protocol enables direct agent-to-business transactions</li>
              <li><strong>Governance remains critical but unsolved:</strong> companies are using various approaches: proxy layers, unified storage, MCP servers</li>
              <li><strong>Business models are shifting:</strong> from seat-based SaaS to outcome-based pricing, with costs dramatically reduced</li>
            </ul>

            <h1>Final Thoughts</h1>

            <p>While I left early due to work obligations, the sessions I attended provided a clear picture of where AI agent technology is heading.
            The energy and buzz at the conference was palpable, with a real sense that we're at an inflection point where AI agents are becoming a fundamental building block of software, similar to how APIs and cloud services transformed software development in previous decades.</p>

            <p>Several memorable quotes that stuck with me:</p>

            <ul>
              <li>"Every one of you is building an agent"</li>
              <li>"We're seeing the shift from reading to writing agents"</li>
              <li>"Ask your employees what they hate: that's your next agent"</li>
              <li>"Agents are a new kind of software"</li>
              <li>"The enterprise isn't ready for v0, but it's coming fast"</li>
            </ul>

            <p>For anyone working with AI or building software, this is an exciting time to be in the field.
            The infrastructure is rapidly maturing, real use cases are emerging, and the potential for transformation is significant.</p>

          </div>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/footer.php'; ?>
      </div>
    </div>               
  </body>
</html>

