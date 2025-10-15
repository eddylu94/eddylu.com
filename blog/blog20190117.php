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
            <div style="font-weight: bold; font-size: 48px;">The Tab Order vs. z-Order Paradox</div>
            <div style="font-style: italic; margin-top: 22px;">Thursday, January 17, 2019</div>
          </div>
      <div class="blog-story" style="line-height: 1.50; margin-top: 50px">

            <img class="blogImage" style="max-height: 300px;" src="/assets/images/blog/20190117/20190117_tabindex.png" />

            <p>In web development, tabindexes and z-indexes are used for completely different purposes; however, these two attributes can still conflict each other in special scenarios.</p>
        
            <h1>What is a tabindex?</h1>

            <p>The tabindex is a global attribute that is a necessity for accessibility. This attribute determines whether an element can be focused, and whether a user can focus upon the element when using keyboard navigation.</p>
        
            <p>The basic rule of thumb is to use a tabindex of '-1' when an element should be focusable, but not reachable via keyboard navigation; and a tabindex of '0' when an element should be focusable and reachable.</p>

            <p>For example with the following code:</p>

        <pre class="codeSnippet">
&lt;div tabindex="0"&gt;A&lt;/div&gt;
&lt;div tabindex="-1"&gt;B&lt;/div&gt;
&lt;div&gt;C&lt;/div&gt;
&lt;div tabindex="0"&gt;D&lt;/div&gt;
&lt;div tabindex="-1"&gt;E&lt;/div&gt;
&lt;div class="block"&gt;F&lt;/div&gt;
            </pre>

            <p>We would have the following behaviour:</p>

            <img class="blogImage" style="max-height: 300px;" src="/assets/images/blog/20190117/20190117_tabindex.png" />
            <span class="caption">Focusable elements are outlined with dark borders, tab order is indicated by the numbered circles</span>

            <p>In this scenario, the divs with tabindexes defined: A, B, D, E; are focusable (such as by mouse click) as shown with thick borders in the diagram. However, if the user simply navigates through the divs by pressing the tab key on their keyboard, then only the divs with tabindexes of at least zero, A and D, will be focused in the order in which they are written.</p>

            <p>The developer also has the ability to order the elements that are to be reached via keyboard navigation by using tab indexes greater than zero:</p>

        <pre class="codeSnippet">
&lt;div tabindex="2"&gt;A&lt;/div&gt;
&lt;div tabindex="1"&gt;B&lt;/div&gt;
&lt;div tabindex="3"&gt;C&lt;/div&gt;
            </pre>

            <p>This example would yield to a keyboard navigation order of the following:</p>

            <img class="blogImage" style="max-height: 300px;" src="/assets/images/blog/20190117/20190117_tabindex2.png" />
            <span class="caption">Tab order is indicated by the numbered circles</span>

            <p>In this case, the div with the smallest tabindex, B, would be reached first. Then, the div with the second smallest tabindex, A, would be reached; followed by the div with the next smallest tabindex, C.</p>

            <p>This convention is dangerous programming! As mentioned in Mozilla's web docs, the use of tabindexes greater than zero increases the difficulty for users who rely on assistive technology. Furthermore, if an application becomes very complex, then it will very difficult for the developer to maintain such an assortment of tabindexes. Thus this approach is highly reprimanded.</p>

            <p>If one wishes to implement a certain tab order for their elements, they should simply define these elements in the order in which the elements should be reached via keyboard navigation.</p>

            <p>For example, if one uses the following logic:</p>

        <pre class="codeSnippet">
&lt;div tabindex="0"&gt;A&lt;/div&gt;
&lt;div tabindex="0"&gt;B&lt;/div&gt;
&lt;div tabindex="0"&gt;C&lt;/div&gt;
            </pre>

            <p>Then the tab order will follow that of the DOM element order where B follows A, and C follows B:</p>

            <img class="blogImage" style="max-height: 300px;" src="/assets/images/blog/20190117/20190117_tabindex3.png" />
        
        <p style="font-style: italic">Conclusion: To define tab orders for elements, simply order the elements in the DOM using the same order while using tab indexes of '0' for these elements.</p>

            <h1>What is a z-index?</h1>

            <p>The z-index is a CSS property that allows the developer to position elements on top of one-another in the z-direction.</p>
        
            <p>For example, with two absolutely positioned elements:</p>

        <pre class="codeSnippet">
&lt;div style="z-index: 2; background-color: red;" class="block"&gt;A&lt;/div&gt;
&lt;div style="z-index: 1; background-color: blue; margin: 10px 0 0 10px;" class="block"&gt;B&lt;/div&gt;
            </pre>

            <p>We can force one div to appear on top of another by using different z-indexes:</p>

            <img class="blogImage" style="max-height: 300px;" src="/assets/images/blog/20190117/20190117_zindex.png" />
        
            <p>In this case, div A has a greater z-index than div B; thus A appears on top of B.</p>

            <p>Although z-indexes have been supported by all common web browsers for years, they are still very dangerous to use when an application becomes too complex. Eventually, every time a new component is assigned a new z-index, the developer has to deal with ensuring that every other component rendered on the same page will not be affected. Otherwise, the developer will basically destroy their page with incorrect orders of components, similar to how one can completely cause chaos when dragging one item in a Microsoft Word document.</p>

            <img class="blogImage" style="max-height: 300px;" src="/assets/images/blog/20190117/20190117_meme.jpg" />
            <span class="caption">I think everyone can relate to this…</span>

            <p>Therefore, it is best to avoid using z-indexes of possible.</p>

            <p>If a developer wishes to properly position elements in the z-direction without using the z-index attribute, they can define the order of these elements by the order in which they are defined in the DOM. Specifically, elements are positioned higher in the z-direction when they are defined later in the DOM structure.</p>

            <p>Therefore, if we take the previous example and remove the z-index attributes, we can order these elements in our HTML code to order these elements in the z-index.</p>

            <p>For example, if we wish to render A on top of B, as we did in the previous example, we simply define A AFTER B:</p>

        <pre class="codeSnippet">
&lt;div style="background-color: blue; margin: 10px 0 0 10px;" class="block"&gt;B&lt;/div&gt;
&lt;div style="background-color: red;" class="block"&gt;A&lt;/div&gt;
            </pre>

            <p>Otherwise, if we define A before B, then B will be the latest defined element, and will appear on top of A:</p>

        <pre class="codeSnippet">
&lt;div style="background-color: red;" class="block"&gt;A&lt;/div&gt;
&lt;div style="background-color: blue; margin: 10px 0 0 10px;" class="block"&gt;B&lt;/div&gt;
            </pre>

            <img class="blogImage" style="max-height: 300px;" src="/assets/images/blog/20190117/20190117_zindex2.png" />

        <p style="font-style: italic">Conclusion: To place elements on top of one-another in the z-direction, define these elements in the DOM so that components defined later are rendered on top of those that are defined earlier.</p>

            <h1>How do the two attributes conflict?</h1>

            <p>So now we know how to properly define tab orders and z-directional orders, you may be wondering how these two attributes may conflict. Well the answer is quite simple:</p>

            <p>A conflict can occur when the desired tab order of a series of elements is different than the desired z-directional order of these elements.</p>

            <p>To better demonstrate this conflict, take a look at a common use case:</p>

            <img class="blogImage" style="max-height: 300px;" src="/assets/images/blog/20190117/20190117_map_example.png" />
            <span class="caption">Google Maps (mobile app)</span>

            <p>Today, it seems that map applications are following a theme where the search bar is rendered as a component that floats on top of the map.</p>

            <img class="blogImage" style="max-height: 300px;" src="/assets/images/blog/20190117/20190117_conflict.png" />
        
            <p>In this simplified diagram, the red block A represents the search bar, and the blue block B represents the underlying map.</p>

            <p>In this very common scenario, as used by Google Maps and Uber, the text input component needs to somehow be visually displayed on top of the map component in the z-direction. A simple solution for this z-order would be to use the following DOM order where the search bar component is defined <span style="font-weight: bold">AFTER</span> the map component:</p>

        <pre class="codeSnippet">
&lt;Map Component&gt; B &lt;/Map Component&gt;
&lt;Search Header Component&gt; A &lt;/Search Header Component&gt;
            </pre>

            <p>However, for this common scenario, the tab order usually involves focusing on the text input component before the map component (along with its inner contents). With our z-order solution, we are defining the search header component after the map component; this would mean that tab-order would begin with the map component before the search header component:</p>

            <img class="blogImage" style="max-height: 300px;" src="/assets/images/blog/20190117/20190117_conflict2.png" />

            <p>Thus we experience this paradox where the tab-order conflicts with the z-order.</p>

            <p>So how can we resolve this issue?</p>               

            <h2>Use Tabindexes Greater than Zero</h2>

            <p>As mentioned before, one could technically use tabindexes greater than zero. Specifically, one could use the following implementation:</p>

        <pre class="codeSnippet">
&lt;Map Component tabindex="1"&gt; B &lt;/Map Component&gt;
&lt;Search Header Component tabindex="0"&gt; A &lt;/Search Header Component&gt;
            </pre>

            <p>However, as we have already learned, this solution is quite dangerous and should be avoided for the benefit of users relying on keyboard navigation, and for developers building complex applications.</p>
        
            <h2>Use Z-Indexes</h2>

            <p>One could also theoretically define the components in the DOM in an order that aligns with the desired tab-order, and explicitly define z-indexes so that the components render in the desired z-order:</p>

        <pre class="codeSnippet">
&lt;Search Header Component style="z-index: 2"&gt; A &lt;/Search Header Component&gt;
&lt;Map Component style="z-index: 1"&gt; B &lt;/Map Component&gt;
            </pre>

            <p>Similar with the tabindex issue, we have learned that developers should stay away from using z-indexes when developing complex applications.</p>

            <h2>Autofocus</h2>

            <p>For this specific example, the autofocus attribute can be quite helpful. The autofocus attribute can be applied to a single element that should receive focus upon page load. In this case, we could simply maintain the DOM order that we used to maintain our desired z-order, and add the autofocus attribute to the search header:</p>

        <pre class="codeSnippet">
&lt;Map Component&gt; B &lt;/Map Component&gt;
&lt;Search Header Component autofocus&gt; A &lt;/Search Header Component&gt;
            </pre>

            <p>Unfortunately, this solution is no longer valid if we are dealing with many more components that conflict in tab and z-order.</p>

            <h2>Relative vs. Absolute Positioning</h2>

            <p>By combining relative and absolute positioning, we can actually place components in the desired z-order:</p>

        <pre class="codeSnippet">
&lt;Search Header Component style="position: absolute;"&gt; A &lt;/Search Header Component&gt;
&lt;Map Component style="position: relative;"&gt; B &lt;/Map Component&gt;
            </pre>

            <p>In this scenario, the absolute-positioned search header component will have the priority in z-order placement compared to the relative-positioned map component. Furthermore, to maintain our desired tab-order, we can simply define the components in the DOM using the same order.</p>

            <p>And thus, we would have our desired tab and z-order:</p>

            <img class="blogImage" style="max-height: 300px;" src="/assets/images/blog/20190117/20190117_conflict3.png" />

            <p>In addition, this solution can theoretically be applied for scenarios with a multitude of components with conflicting tab and z-orders. Thus, if you are a CSS master, then, using some parent-child relationships and elaborate combinations of relative and absolute positioned components, you should be able to arrange any number of components in the desired tab and z-orders.</p>

            <h1>Conclusion</h1>
        
            <p>Rendering a series of components in a desired tab-order and z-order can get quite messy, but always remember that it is always best to avoid using positive-numbered tabindexes and any z-indexes if possible.</p>

          </div>
            </div>
          </div>
    </div>               
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/footer.php'; ?>
  </body>
</html>