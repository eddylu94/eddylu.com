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
            <div style="font-weight: bold; font-size: 48px;">Upcoming Optional Chaining and Null Coalescing in JS/TS</div>
            <div style="font-style: italic; margin-top: 22px;">Thursday, November 3, 2019</div>
          </div>
      <div class="blog-story" style="line-height: 1.50; margin-top: 50px">

            <img class="blogImage" src="/assets/images/blog/20191103/tc39.png" />

            <p>Earlier this year, a friend from work told me that TypeScript should soon be introducing two important features: <span style="font-weight: bold;">Optional Chaining</span> and <span style="font-weight: bold;">Null Coalescing</span>. This got me pretty excited as these two features would solve some common issues that I have encountered during web development.</p>
        
            <h1>What is Optional Chaining?</h1>

            <p>If you have done any form of software development, then you most definitely are aware of the necessity of utilizing null checks. Generally, the practice of null checks involves developers ensuring that variables exist before attempting to obtain attributes from the variables.</p>

            <p>Here is an example of a null check:</p>

        <pre class="codeSnippet">
let myVariable;
if (a) {
  myVariable = a.b;
}
            </pre>

            <span class="caption">Example 1 - Using an IF statement to check for null values</span>

            <p>In the above example, one attempts to assign <span style="font-weight: bold;">myVariable</span> the value <span style="font-weight: bold;">b</span>, which is an attribute of <span style="font-weight: bold;">a</span>. However, if <span style="font-weight: bold;">a</span> does not "exist", such as being null or undefined, then an error would occur when attempting to obtain the attribute <span style="font-weight: bold;">b</span>. Thus, the developer first uses an IF condition to check whether or not <span style="font-weight: bold;">a</span> is a <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Glossary/Truthy">truthy</a> value (anything that is not <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Glossary/Falsy">falsy</a>) before attempting to obtain the attribute <span style="font-weight: bold;">b</span>.</p>
 
            <p>In JavaScript (and TypeScript), developers can significantly simplify the implementations of null checks by using AND operators:</p>

        <pre class="codeSnippet">
const myVariable = a && a.b;
            </pre>          

            <span class="caption">Example 2 - Using AND operators to check for null values</span>

            <p>The above logic results in the same outcome as that of Example 1. This is because JavaScript will continue to check each variable in a list of ANDed variables until falsy (opposite of truthy) value is reached before returning that value; if all of the variables are truthy, then the last variable in the list is returned.</p>

            <p>Thus, developers have the ability to deep dive into variables while performing null checks:</p>

        <pre class="codeSnippet">
const myVariable = a && a.b && a.b.c && a.b.c.d && a.b.c.d.e;
            </pre>

            <span class="caption">Example 3 - Using AND operators to check for null values in a chain of variables</span>

            <p>However, even with the ability to chain variables, this can become quite messy with lengthy variable names. Furthermore, chaining can increase execution time when methods are execute more than once:</p>

        <pre class="codeSnippet">
const myVariable = methodA && methodA() && methodA().b;
            </pre>

            <span class="caption">Example 4 - Checking for null values from function calls</span>

            <p>In this example, <span style="font-weight: bold;">methodA</span> is executed more than once. To resolve this issue, developers would typically proxy the outcome of the method call into a new variable:</p>

        <pre class="codeSnippet">
const methodAOutcome = methodA && methodA();
const myVariable = methodAOutcome && methodAOutcome.b;
            </pre>

            <span class="caption">Example 5 - Storing function calls in variables before performing null checks</span>

            <p>In this revised example, the outcome of the executed <span style="font-weight: bold;">methodA</span> is stored in a variable <span style="font-weight: bold;">methodAOutcome</span>; thus <span style="font-weight: bold;">methodA</span> only needs to be executed once.</p>

            <p>Due to the complications of lengthy chained variables and re-executed method calls, as well as other related issues, <a target="_blank" href="https://www.ecma-international.org/memento/tc39-rf-tg.htm">Ecma TC39</a> has begun experimenting with optional chaining.</p>

            <p>Developers will hopefully soon be able to deep dive into variable properties by simply using a delimiter comprised of a question mark and period:</p>

        <pre class="codeSnippet">
const myVariable = a?.b?.c?.d?.e;
            </pre>

            <span class="caption">Example 6 - Optional chaining</span>

            <p>This simple statement would yield to the same result as that of Example 3.</p>

            <h2>Current Status</h2>

            <p>As of November 3, 2019, optional chaining is an <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Optional_chaining">experimental technology</a> for JavaScript:</p>

            <img class="blogImage" src="/assets/images/blog/20191103/optional_chaining_compatibility.png" />

            <p>TC39 has classified optional chaining as a Stage 3 feature, meaning that "further refinement will require feedback from implementations and users", as stated in the <a target="_blank" href="https://tc39.es/process-document/">TC39 process document</a>.</p>

            <p>TypeScript on the other hand, is in the process of introducing optional chaining as a feature as part of its upcoming TypeScript 3.7 release; the feature is currently available in TypeScript 3.7 beta. The final release for TypeScript 3.7 is <a target="_blank" href="https://github.com/microsoft/TypeScript/issues/33352">scheduled for November 5th</a>!</p>

            <h1>What is Null Coalescing?</h1>

            <p>In software engineering, developers often use fall-back logic in the event that a variable does not exist.</p>

            <p>here is an example of assigning a variable to values based on conditions defined in an IF/ELSE statement:</p>

        <pre class="codeSnippet">
let myVariable;
if (a) {
  myVariable = a;
}
else {
  myVariable = b;
}
            </pre>

            <span class="caption">Example 7 - Using IF/ELSE statements to set a variable</span>

            <p>In the above example, the program first checks whether <span style="font-weight: bold;">a</span> exists (is truthy). If <span style="font-weight: bold;">a</span> exists, then <span style="font-weight: bold;">myVariable</span> is assigned to <span style="font-weight: bold;">a</span>; but if <span style="font-weight: bold;">a</span> does not exist (is falsy), then <span style="font-weight: bold;">myVariable</span> is assigned to the fallback value of <span style="font-weight: bold;">b</span>.</p>

            <p>This logic can also be simplified using a ternary operator:</p>

        <pre class="codeSnippet">
const myVariable = a ? a : b;
            </pre>

            <span class="caption">Example 8 - Using a ternary operator to assign a variable</span>

            <p>Although ternary operators significantly help simplify the logic of checking variable existance before executing fallback logic, it still requires a redundant call of the conditional expression. In the above example, the variable <span style="font-weight: bold;">a</span> needs to be called twice: once in the condition, and once in the IF_TRUE expression.</p>

            <p>Similar to that of the previous discussion regarding the chaining of variables, using ternary operators can also result in poor performance when executing method calls:</p>

        <pre class="codeSnippet">
const myVariable = methodA() ? methodA() : b;
            </pre>

            <span class="caption">Example 9 - Using a ternary operature to check values returned from function calls</span>

            <p>In this example, <span style="font-weight: bold;">methodA()</span> needs to be executed more than once. Similar to that of the chaining of variables, one could use a proxy to simplify the method call logic:</p>

        <pre class="codeSnippet">
const methodAOutcome = methodA();
const myVariable = methodAOutcome ? methodAOutcome : b;
            </pre>

            <span class="caption">Example 10 - Storing function call values before assigning values in a ternary expression</span>

            <p>Some developers attempt to avoid the redundant conditional expression calls in ternary expressions by using the OR operator:</p>

        <pre class="codeSnippet">
const myVariable = a || b;
            </pre>

            <span class="caption">Example 11 - Using OR to assign values</span>

            <p>Although the usage of OR operators does simplify the logic while yielding to the same outcome, I personally prefer to avoid such syntax as it can cause developers confusion when attempting to extinguish between boolean expressions and expressions that use fallback logic.</p>

            <p>Thankfully, both TC39 and TypeScript have proposed null coalescing where developers will be able to use double quotation mark delimiters when implementing these expressions:</p>
      
        <pre class="codeSnippet">
const myVariable = a ?? b;
            </pre>

            <span class="caption">Example 12 - Null coalescing</span>

            <p>One should, however, note that, for both JavaScript and TypeScript, null coalescing will only return values to the right of the double question marks only if the conditional expression to the left is <span style="font-weight: bold;">null</span> or <span style="font-weight: bold;">undefined</span>; this differs from the previously OR expression, from Example 11, that checks for ALL falsy values in its conditional expression.</p>

            <h2>Current Status</h2>

            <p>Null coalescing is currently implemented in several languages including C#, Perl, Swift, and PHP.</p>

            <p>As of November 3rd, 2019, TC39 has classified null coalescing as a Stage 3 feature. It seems that the proposal draft for TC39 null coalescing reflects the same functionality as those of other programming languages. </p>

            <p>Null coalescing is also in Stage 3 for TypeScript, and is currently being ramped in TypeScript 3.7 beta. As previously mentioned, the final release is scheduled for November 5th</a>.</p>

            <h1>Conclusion</h1>

            <p>Overall, the introduction of optional chaining and null coalescing for JavaScript and TypeScript is truly exciting as it will resolve issues regarding code readability, prevent redundant calls, and significantly simplify software logic. The introduction of the two features in TypeScript 3.7 also demonstrates the dominance of the open-source language as it continues to evolve and expand to over <a target="_blank" href="https://github.com/microsoft/TypeScript">1.6 million users</a>.</p>

            <h1>Relevant Links</h1>

            <p>TC39 Proposal for Optional Chaining (on GitHub):
            <br /><a target="_blank" href="https://github.com/tc39/proposal-optional-chaining">https://github.com/tc39/proposal-optional-chaining</a></p>

            <p>TypeScript Proposal for Optional Chaining (on GitHub):
            <br /><a target="_blank" href="https://github.com/microsoft/TypeScript/issues/16">https://github.com/microsoft/TypeScript/issues/16</a></p>

            <p>Mozilla Web Docs for Optional Chaining:
            <br /><a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Optional_chaining">https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Optional_chaining</a></p>

            <p>TC39 Proposal for Optional Chaining (on GitHub):
            <br /><a target="_blank" href="https://github.com/tc39/proposal-nullish-coalescing">https://github.com/tc39/proposal-nullish-coalescing</a></p>

            <p>TypeScript Proposal for Null Coalescing (on GitHub):
            <br /><a target="_blank" href="https://github.com/microsoft/TypeScript/issues/26578">https://github.com/microsoft/TypeScript/issues/26578</a></p>

            <p>Roadmap for TypeScript 3.7 (on GitHub):
            <br /><a target="_blank" href="https://github.com/microsoft/TypeScript/issues/33352">https://github.com/microsoft/TypeScript/issues/33352</a></p>

          </div>
            </div>
          </div>
    </div>               
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/footer.php'; ?>
  </body>
</html>