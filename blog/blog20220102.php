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
            <div style="font-weight: bold; font-size: 48px;">Common syntactical differences between React and React Native</div>
            <div style="font-style: italic; margin-top: 22px;">Sunday, January 2, 2022</div>
          </div>
          <div class="blog-story" style="line-height: 1.50; margin-top: 50px">

        <img class="blogImage" src="/assets/images/blog/20220102/blog20220102_banner.png" />

        <p>When working on side projects, I find myself often converting React web applications into React Native mobile applications.</p>
								
        <p>This is due to the fact that, even when the ultimate goal is to develop a mobile app, it can be difficult to receive feedback from friends/testers as they would have to either download the mobile application or load the application via a mobile test tool (ex. <a target="_blank" href="https://developer.apple.com/testflight/">TestFlight</a>).
          Therefore, I frequently find it easier to quickly hack up prototypes as React web apps and then, after enough user feedback and development iterations, convert the web app into a mobile app.</p>

        <p>Additional reasons why I choose to implement web apps before converting them into mobile apps:</p>
        <ul>
          <li>Mobile apps require developers to obtain Apple App Store and/or Google Play Store approval before launching
            <ul><li>Requires proper application development conventions, detailed application descriptions, and screenshots</li></ul></li>
          <li>Mobile apps require either emulators or physical devices for testing</li>
          <li>Mobile app routing development requires implementations of tab/stack navigators</li>
          <li>There are generally more developers who have React experience than those with React Native experience</li>
        </ul>

        <p>However, one should note that there are also disadvantages for this approach.
          For example, as per the Lean Startup principal, startup app projects should be as simple as possible; developers should seek user feedback and iterate constantly off of the simple prototype.</p>
          
          <img class="blogImage" style="max-height: 300px;" src="/assets/images/blog/20220102/blog20220102_lean_startup.png" />
          <span class="caption">Cycle defined in the <a target="_blank" href="http://theleanstartup.com/principles">Lean Startup</a></span>
          
          <p>Implementing a web app prior to converting to mobile can be time consuming; at some point, developers need to decide whether they should continue to maintain the web application or discontinue the web app development.</p>

        <p>Although React and React Native are great tools for web and mobile development respectively, and share common syntaxes,
          there currently does not exist any standard tool for converting React applications into React Native applications.
          Hence, much of the side projects that I develop involve manual transposition from React to React Native.</p>

        <p>The following are common syntactical differences I have stumbled upon when using React and React Native:

        <p style="font-style: italic;">Note that these are just some of the differences between React and React Native development, and not an exhaustive list.</p>
                
        <h1>Component Syntax</h1>

        <h2>Buttons</h2>

        <p>In React, button content/text is centered by default; in React Native, the content is naturally aligned in the top-left of the <a target="_blank" href="https://reactnative.dev/docs/button">Button</a> component.</p>

        <img class="blogImage" style="max-height: 300px;" src="/assets/images/blog/20220102/blog20220102_button_1.png" />
        <span class="caption">Button without alignment explicitly defined for React</span>

        <img class="blogImage" style="max-height: 300px;" src="/assets/images/blog/20220102/blog20220102_button_2.png" />
        <span class="caption">Button without alignment explicitly defined for React Native</span>

        <p>Button-type components in React Native, such as <a target="_blank" href="https://reactnative.dev/docs/touchablehighlight">TouchableHighlight</a>, can only contain one child component.</p>

<pre class="codeSnippet">
&lt;TouchableHighlight onPress={() => {}}&gt;
  &lt;&gt;
    &lt;Text&gt;Hello World !&lt;/Text&gt;
    &lt;Image source={require('/hello.png')}&gt;
  &lt;/&gt;
&lt;/TouchableHighlight&gt;
</pre>

<span class="caption">A common solution for ensuring single child elements for TouchableHighlight is to use <a target="_blank" href="https://reactjs.org/docs/fragments.html">fragments</a></span>

        <h2>Text</h2>

        In React Native, text has to be wrapped by the <a target="_blank" href="https://reactnative.dev/docs/text">Text</a> component; this includes text used in buttons/containers.

<pre class="codeSnippet">
&lt;View&gt;
  &lt;Text&gt;Hello World !&lt;/Text&gt;
&lt;/View&gt;
</pre>

<span class="caption">Text that is bound by a Text component, by requirement, in React Native</span>

<pre class="codeSnippet">
&lt;div&gt;
  Hello World !
&lt;/div&gt;
</pre>

<span class="caption">Similar implementation in React that does not require a wrapper Text component</span>

        <h2>Views/Divs</h2>

        <p>In React/HTML, <a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox">flexboxes</a> use horizontal, or "row", orientation by default. In React Native, flexboxes use vertical, or "column", orientation by default.</p>

        <p><a target="_blank" href="https://reactnative.dev/docs/view">View</a> components in React Native do not support gradient backgrounds.</p>

        <p>The <em>box-sizing</em> attribute is not used in React Native as containers naturally account for border and padding as part of their width and height;
        in React/HTML, this would be equivelant to using <em>box-sizing</em> of <em>border-box</em>.</p>

        <h2>Images</h2>

        In React Native, the Image component source uses either <em>uri</em> with an image path, or an import (ex. via <em>require</em>).

<pre class="codeSnippet">
&lt;Image source={require('hello.png')} /&gt;
</pre>

<span class="caption">Image component that uses source import in React Native</span>

<pre class="codeSnippet">
&lt;Image src={{uri: 'hello.png'}} /&gt;
</pre>

<span class="caption">Image component that uses uri image path in React Native</span>
								
        <p>Images in React Native do not support specific attributes such as borders, border radius, etc;
        to apply these styling changes, one needs to wrap the Image components in containers, and apply the styles to the container.</p>

        <h1>Styling Syntax</h1>

        <h2>Classes</h2>

        <p>In React, without third-party libraries, styles can be applied to elements using in-line styles or classes from stylesheets; React Native does not support styles added via classes.</p>

        <h2>Value Types</h2>

        <p>In React/HTML, <em>border-radius</em> can be defined in percentages (in addition to pixels, other units) whereas React Native does not support percentage values.</p>

<pre class="codeSnippet">
borderRadius: "50%"
</pre>

<span class="caption">The percentage value is valid in React/HTML, not in React Native</span>

        <p>In React Native, <em>font-weight</em> can only be defined via string-type values.</p>

<pre class="codeSnippet">
fontWeight: 500
</pre>

<span class="caption">The above numeric font weight value is only valid for React/HTML, not in React Native</span>

        <h2>Separation and Grouping of Styles</h2>
								
        In React Native, borders can only be defined in separate style attributes: <em>borderStyle</em>, <em>borderWidth</em>, <em>borderColor</em>. In React/HTML, the three border attributes can be both separate and combined.

<pre class="codeSnippet">
border: "1px solid #fff"
</pre>

<span class="caption">Combined syntax only valid for React</span>

<pre class="codeSnippet">
borderWidth: "1px"
borderStyle: "solid"
borderColor: "#fff"
</pre>

<span class="caption">Separated syntax valid for both React and React Native</span>

        <p>Similar rules are enforced for other styles such as <em>padding</em> and <em>margin</em>.</p>

<pre class="codeSnippet">
padding: "1px 2px 3px 4px"
</pre>

<span class="caption">Combined syntax only valid for React</span>

<pre class="codeSnippet">
paddingTop: 1
paddingRight: 2
paddingBottom: 3
paddingLeft: 4
</pre>

<span class="caption">Separated syntax valid for both React and React Native</span>

        <p>React Native, however, offers special horizontal and vertical combined padding and margins using <em>paddingHorizontal</em>, <em>paddingVertical</em>, <em>marginHorizontal</em>, <em>marginVertical</em> respectively.</p> 

<pre class="codeSnippet">
paddingHorizontal: 1
paddingVertical: 2
</pre>

<span class="caption">React Native supported horizontal/vertical syntax</span>

<pre class="codeSnippet">
paddingTop: 1
paddingRight: 2
paddingBottom: 1
paddingLeft: 2
</pre>

<span class="caption">Equivalant syntax with same outcome supported for both React and React Native</span>

        <h1>Conclusion</h1>

        <p>Although there exist these minor syntactical discrepencies between React and React Native, these differences should not impose a major obstacle for the transposition from React to React Native as component and styling syntaxes remaining relatively the same.
          Furthermore, these differences should be less problematic for developers who have an abundant of experience context switching between the two libraries.</p>

        <h1>Relevant Links</h1>

        <p>TestFlight:
        <br /><a target="_blank" href="https://developer.apple.com/testflight/">https://developer.apple.com/testflight/</a></p>

        <p>The Lean Startup:
        <br /><a target="_blank" href="http://theleanstartup.com/principles">http://theleanstartup.com/principles</a></p>

        <p>Basic concepts of flexbox:
        <br /><a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox">https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox</a>

        <p>React Fragments:
        <br /><a target="_blank" href="https://reactjs.org/docs/fragments.html">https://reactjs.org/docs/fragments.html</a></p>
								
        <p>React Native Button:
        <br /><a target="_blank" href="https://reactnative.dev/docs/button">https://reactnative.dev/docs/button</a></p>

        <p>React Native TouchableHighlight:
        <br /><a target="_blank" href="https://reactnative.dev/docs/touchablehighlight">https://reactnative.dev/docs/touchablehighlight</a></p>

        <p>React Native Text:
        <br /><a target="_blank" href="https://reactnative.dev/docs/text">https://reactnative.dev/docs/text</a></p>

            <p>React Native View:
            <br /><a target="_blank" href="https://reactnative.dev/docs/view">https://reactnative.dev/docs/view</a></p>
          </div>
        </div>
      </div>
    </div>               
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/footer.php'; ?>
  </body>
</html>