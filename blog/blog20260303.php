<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/head-includes.php'; ?>
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
            <div style="font-weight: bold; font-size: 48px;">Dual Writing Web and Mobile with AI</div>
            <div style="font-style: italic; margin-top: 22px;">Tuesday, March 3, 2026</div>
          </div>
          <div class="blog-story" style="line-height: 1.50; margin-top: 50px">

            <img class="blogImage" src="/assets/images/blog/20260303/blog20260303_diagram.png" />
            <span class="caption">One backend serving web and mobile (iOS + Android) clients</span>

            <p>As someone who enjoys building side projects, one thing I've realized is that AI has dramatically reduced the cost of choosing between web and mobile development.</p>

            <p>Historically, this was a real tradeoff.</p>

            <h3>Web</h3>
            <ul>
              <li>Lower friction onboarding</li>
              <li>Instant distribution</li>
              <li>Easier iteration</li>
            </ul>

            <h3>Mobile</h3>
            <ul>
              <li>Push notifications</li>
              <li>Better retention</li>
              <li>Native UX expectations</li>
            </ul>

            <p>Frameworks like React Native helped reduce the iOS vs Android split, though they introduced their own constraints, something <a target="_blank" href="https://medium.com/airbnb-engineering/sunsetting-react-native-333cb8e0d85a">Airbnb documented</a> when they sunset React Native due to performance and organizational challenges.</p>

            <p>Today, however, the more interesting shift is not framework-level abstraction. It's <strong>dual writing</strong>.</p>

            <p>With tools like Cursor or Claude Code, you can develop on one platform and mirror the architecture to another quickly, not by blindly generating code, but by guiding it.</p>

            <h1>How I've Approached It</h1>

            <p>Start by documenting a lightweight PRD and ERD. AI-assisted drafts are fine; clarity up front reduces drift later.</p>

            <p>Build one surface first: I typically start with web.</p>

            <p>Ask the AI to mirror changes onto mobile.</p>

            <p>Force the tool to ask clarifying questions before making decisions:</p>
            <ul>
              <li>What backend stack? Node + TypeScript?</li>
              <li>Express or something else?</li>
              <li>Expo for mobile?</li>
              <li>How should auth be handled across both clients?</li>
            </ul>

            <p>I also instruct the model to proceed iteratively and confirm before making structural changes.</p>

            <p>My setup is intentionally simple:</p>
            <ul>
              <li>One backend service</li>
              <li>One web client</li>
              <li>One mobile client</li>
            </ul>

            <p>To keep changes readable, I prefix commit messages:</p>
            <ul>
              <li><code>Server:</code></li>
              <li><code>Web:</code></li>
              <li><code>Mobile:</code></li>
            </ul>

            <p>To enforce dual updates going forward, you can add guardrails:</p>
            <ul>
              <li><code>CLAUDE.md</code> or <code>AGENTS.md</code> describing project conventions</li>
              <li>CI rules that prevent divergence</li>
            </ul>

            <h1>A Practical Caveat</h1>

            <p>This workflow is powerful for side projects and prototypes. However, for full-fledged professional applications (especially ones with large teams, complex domains, performance constraints, or strict compliance requirements), this approach is not yet a complete replacement for traditional architecture, QA processes, and deep engineering expertise.</p>

            <p>AI will likely tackle more of those challenges over time, but for now it's best treated as an amplifier, not an autopilot.</p>

            <h1>Why This Matters</h1>

            <p>This kind of cross-platform iteration, quickly moving between web and mobile with consistency, would have been slow and fragile even six months ago. Two years ago, it would have felt unrealistic for a solo builder.</p>

            <p>Now it's practical.</p>

            <p>And that changes what's worth attempting.</p>

            <h1>References</h1>

            <p>Sunsetting React Native - Airbnb Engineering:
            <br /><a target="_blank" href="https://medium.com/airbnb-engineering/sunsetting-react-native-333cb8e0d85a">https://medium.com/airbnb-engineering/sunsetting-react-native-333cb8e0d85a</a></p>

          </div>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/footer.php'; ?>
      </div>
    </div>               
  </body>
</html>
