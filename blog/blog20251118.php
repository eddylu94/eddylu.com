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
            <div style="font-weight: bold; font-size: 48px;">Temporal Launch & Learn: Building Durable GenAI Applications</div>
            <div style="font-style: italic; margin-top: 22px;">Tuesday, November 18, 2025</div>
          </div>
          <div class="blog-story" style="line-height: 1.50; margin-top: 50px">

            <img class="blogImage" src="/assets/images/blog/20251118/blog20251118_module1.png" />
            <span class="caption">Temporal Launch & Learn: San Francisco</span>

            <p>This week, I attended the <a target="_blank" href="https://temporal.io/pages/temporal-launch-and-learn-sf">Temporal Launch & Learn</a> conference in San Francisco.
            The conference focused on how developers can use Temporal to build reliable, long-running GenAI applications.</p>

            <img class="blogImage" src="/assets/images/blog/20251118/blog20251118_agenda.png" />
            <span class="caption">Conference agenda</span>

            <p>Here are some of the sessions I attended:</p>
            <ul>
              <li>Workshop Module: <em>Foundations of GenAI Applications & Temporal</em></li>
              <li>Featured Speaker: <em>Ryan Albert, Founding Engineer, Speakeasy</em></li>
            </ul>

            <h1>Workshop Module: Foundations of GenAI Applications & Temporal</h1>

            <img class="blogImage" src="/assets/images/blog/20251118/blog20251118_module1.png" />
            <span class="caption">Cornelia Davis presenting the Foundations of GenAI Applications & Temporal workshop</span>

            <h2>Overview</h2>

            <p>This session introduced the <strong>foundations of building GenAI applications using Temporal</strong>, blending LLM-based workflows with distributed systems reliability.
            It emphasized how Temporal simplifies GenAI orchestration by handling retries, durability, and execution flow behind the scenes.</p>

            <p>The morning covered:</p>
            <ul>
              <li>How <strong>LLMs</strong> and <strong>Temporal</strong> integrate to create reliable, long-running AI apps.</li>
              <li>Differences between <strong>fixed-flow</strong> (predefined sequence) and <strong>agentic-loop</strong> (LLM-directed) systems.</li>
              <li>Hands-on setup in <strong>GitHub Codespaces</strong> with prebuilt Jupyter notebooks and exercises.</li>
              <li>A walkthrough of invoking an LLM (OpenAI Completions API) and storing the results as a PDF.</li>
            </ul>

            <h2>Key Topics & Learnings</h2>

            <h3>GenAI Application Structure</h3>

            <p><strong>Fixed-flow:</strong> calls LLMs at defined steps, processes outputs deterministically.</p>

            <p><strong>Agentic-loop:</strong> gives the LLM autonomy to determine subsequent actions.</p>

            <p>Both have practical value; not every system needs full autonomy.</p>

            <h3>LLM Interaction Fundamentals</h3>

            <p>Calls made via APIs (e.g., GPT-4/5, Claude).</p>

            <p>Importance of <strong>context windows</strong>: models are stateless, so context must be preserved across calls.</p>

            <p>Early examples used the <em>Completions API</em>, later transitioning to the <em>Responses API</em> for tool-use and planning.</p>

            <h3>Hands-on Coding Notes</h3>

            <p>Jupyter notebooks were used to run Python examples inside <strong>GitHub Codespaces</strong> (no local setup required).</p>

            <p>The first exercise walked through prompting an LLM (<code>give me five facts about elephants</code>) and outputting the result as a <strong>PDF report</strong>.</p>

            <p>Participants practiced calling LLM APIs, chaining results, and using a small <code>generate_pdf()</code> utility to simulate downstream processing.</p>

            <p>Follow-up exercises demonstrated creating <code>.env</code> files, adding OpenAI keys, and working through additional notebooks covering foundations and adding durability to workflows.</p>

            <h3>Durability Concepts Introduced</h3>

            <p>AI systems are "distributed systems on steroids."</p>

            <p>Temporal's core abstractions (<em>workflows</em>, <em>activities</em>, <em>signals</em>, and <em>queries</em>) form the backbone of durable GenAI orchestration.</p>

            <p>Temporal provides out-of-the-box recovery for failed API calls, retries for rate limits, and consistency across human or system interruptions.</p>

            <h2>Notable Quotes</h2>

            <blockquote>"Don't feel like you must give agency to the LLM; fixed flows still have tremendous value."</blockquote>

            <blockquote>"These AI systems are distributed systems on steroids."</blockquote>

            <h1>Featured Speaker: Ryan Albert, Founding Engineer, Speakeasy</h1>

            <img class="blogImage" src="/assets/images/blog/20251118/blog20251118_featured.png" />
            <span class="caption">Ryan Albert (Speakeasy) presenting how Temporal is used to power MCP servers at Speakeasy</span>

            <h2>Topic: <em>Building MCP Servers with Temporal</em></h2>

            <p>Ryan Albert's session showcased how <strong>Speakeasy</strong> uses Temporal to power <strong>MCP (Model Context Protocol)</strong> servers, a standardized way for LLMs to access tools and APIs.</p>

            <h2>Highlights</h2>

            <h3>What is MCP?</h3>

            <p>MCP (Model Context Protocol) defines how models access external tools, similar to OpenAPI but built for LLM integrations.
            It standardizes tool schemas, parameters, and interactions.</p>

            <h3>Speakeasy's Use of Temporal</h3>

            <p>Temporal powers asynchronous and durable tasks behind MCP servers.</p>

            <p>Enables complex, long-lived tool invocations without losing state.</p>

            <p>Used for workflows like job execution, event-driven processing, and approvals.</p>

            <h3>Demo Walkthrough</h3>

            <p>Built a live <strong>TypeScript-based MCP server</strong> wrapping the Temporal Client API.</p>

            <p>Exposed tools for querying active Temporal workflows and fetching workflow metadata.</p>

            <p>Showed live deployment and integration with Claude via VS Code.</p>

            <h3>Future Roadmap</h3>

            <p><strong>Dynamic MCP servers</strong> to reduce context window size using semantic tool discovery.</p>

            <p><strong>Human approval workflows</strong>: using Temporal signals for action verification before running critical tools.</p>

            <p><strong>Task-based long-running workflows</strong> coming to the MCP spec (e.g., <code>getTasks</code>, <code>listTasks</code>, <code>cancelTasks</code> RPCs).</p>

            <p>MCP and Temporal together make long-running, fault-tolerant LLM agents practical.</p>

            <h2>Memorable Quotes</h2>

            <blockquote>"Temporal's logical workflows map perfectly to MCP's new long-running task spec; it's a match made in heaven."</blockquote>

            <blockquote>"Now the robots are reading our docstrings." (on auto-generating MCP tool schemas from TypeScript docstrings)</blockquote>

            <blockquote>"With Temporal, you can stop worrying about process boundaries; workflows just keep going."</blockquote>

            <h1>Key Takeaways</h1>

            <ul>
              <li>Temporal enables <strong>durable GenAI applications</strong> that can survive API errors, rate limits, or downtime.</li>
              <li>Developers should think in <strong>logical workflows</strong>, not physical processes.</li>
              <li><strong>MCP + Temporal</strong> = the future of tool-driven AI agents.</li>
              <li>Even "fixed-flow" AI apps offer strong business value; agentic loops come later.</li>
              <li>Temporal's SDKs abstract distributed system complexity, letting developers focus purely on business logic.</li>
            </ul>
          </div>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/footer.php'; ?>
      </div>
    </div>               
  </body>
</html>

