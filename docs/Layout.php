<?php $title = 'Layout'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>This plugin creates classes to handle column layouts:</p>

  <p>Where <code>N</code> can be a number of columns, up to the largest amount of columns defined or a fraction (<code>1/2</code>, <code>1/3</code>, <code>1/4</code>, <code>2/3</code> or <code>3/4</code>)</p>

  <h3>For use inside <code>.container</code> or a descendant of <code>.container</code></h3>
  <ul>
    <li>
      <strong><a href="#demo">Element width:</a></strong>
      <ul>
        <li><code>.w-N-cols</code> sets <code>width</code> to <code>N</code> columns/fraction wide, if inside of <code>.cols-container</code> also includes an inner gutter <code>margin-left</code></li>
      </ul>
    </li>
    <li class="mt-20">
      <strong><a href="#flexed">Flex based grid</a></strong>
      <ul>
        <li><code>.cols-container</code> makes a container for columns, <code>flex: row wrap</code> with a negative inner gutter <code>margin-left</code></li>
        <li><code>.ml-0</code> on child, resets <code>margin-left</code> to 0, adds specificity to the class</li>
      </ul>
    </li>
    <li class="mt-20">
      <strong><a href="#margins">Margins:</a></strong>
      <ul>
        <li><code>.ml-N-cols</code> on child, sets a <code>margin-left</code> of <code>N</code> columns wide</li>
        <li><code>.mr-N-cols</code> on child, sets a <code>margin-right</code> of <code>N</code> columns wide</li>
        <li><code>.mx-N-cols</code> on child, sets a <code>margin-right</code> and <code>margin-left</code> of <code>N</code> columns wide</li>

        <li class="mt-20"><code>.-ml-N-cols</code> on child, sets a negative <code>margin-left</code> of <code>N</code> columns wide</li>
        <li><code>.-mr-N-cols</code> on child, sets a negative <code>margin-right</code> of <code>N</code> columns wide</li>
       <li><code>.-mx-N-cols</code> on child, sets a negative <code>margin-right</code> and a negative <code>margin-left</code> of <code>N</code> columns wide</li>
      </ul>
    </li>
    <li class="mt-20">
      <strong><a href="#padding">Padding:</a></strong>
      <ul>
        <li><code>.pl-N-cols</code> on child, sets a <code>padding-left</code> of <code>N</code> columns wide</li>
        <li><code>.pr-N-cols</code> on child, sets a <code>padding-right</code> of <code>N</code> columns wide</li>
        <li><code>.px-N-cols</code> on child, sets a <code>padding-right</code> and <code>padding-left</code> of <code>N</code> columns wide</li>
      </ul>
    </li>
    <li class="mt-20">
      <strong><a href="#positioning">Positioning:</a></strong>
      <ul>
        <li><code>.left-N-cols</code> sets <code>left</code> to <code>N</code> columns</li>
        <li><code>.right-N-cols</code> sets <code>right</code> to <code>N</code> columns</li>
        <li><code>.inset-x-N-cols</code> sets <code>left</code> and <code>right</code> to <code>N</code> columns</li>

        <li class="mt-20"><code>.-left-N-cols</code> sets negative <code>left</code> to <code>N</code> columns</li>
        <li><code>.-right-N-cols</code> sets negative <code>right</code> to <code>N</code> columns</li>
        <li><code>.-inset-x-N-cols</code> sets negative <code>left</code> and negative <code>right</code> to <code>N</code> columns</li>
      </ul>
    </li>
    <li class="mt-20">
      <strong><a href="#gutterless">gutter-less spacing</a></strong> variants:
      <ul>
        <li><code>.ml-N-cols-no-gutter</code> on child, sets a <code>margin-left</code>of <code>N</code> columns wide minus an inner gutter</li>
        <li><code>.mr-N-cols-no-gutter</code> on child, sets a <code>margin-right</code> of <code>N</code> columns minus an inner gutter</li>
        <li><code>.mx-N-cols-no-gutter</code> on child, sets a <code>margin-right</code> and <code>margin-left</code> of <code>N</code> columns minus an inner gutter</li>

        <li class="mt-20"><code>.-ml-N-cols-no-gutter</code> on child, sets a negative <code>margin-left</code> of <code>N</code> columns wide minus an inner gutter</li>
        <li><code>.-mr-N-cols-no-gutter</code> on child, sets a negative <code>margin-right</code> of <code>N</code> columns wide minus an inner gutter</li>
        <li><code>.-mx-N-cols-no-gutter</code> on child, sets a negative <code>margin-right</code> and a negative <code>margin-left</code> of <code>N</code> columns minus an inner gutter</li>

        <li class="mt-20"><code>.pl-N-cols-no-gutter</code> on child, sets a <code>padding-left</code> of <code>N</code> columns minus an inner gutter</li>
        <li><code>.pr-N-cols-no-gutter</code> on child, sets a <code>padding-right</code> of <code>N</code> columns minus an inner gutter</li>
        <li><code>.px-N-cols-no-gutter</code> on child, sets a <code>padding-right</code> and <code>padding-left</code> of <code>N</code> columns minus an inner gutter</li>

        <li class="mt-20"><code>.left-N-cols-no-gutter</code> sets <code>left</code> to <code>N</code> columns minus an inner gutter</li>
        <li><code>.right-N-cols-no-gutter</code> sets <code>right</code> to <code>N</code> columns minus an inner gutter</li>
        <li><code>.inset-x-N-cols-no-gutter</code> sets <code>left</code> and <code>right</code> to <code>N</code> columns minus an inner gutter</li>

        <li class="mt-20"><code>.-left-N-cols-no-gutter</code> sets negative <code>left</code> to <code>N</code> columns minus an inner gutter</li>
        <li><code>.-right-N-cols-no-gutter</code> sets negative <code>right</code> to <code>N</code> columns minus an inner gutter</li>
        <li><code>.-inset-x-N-cols-no-gutter</code> sets negative <code>left</code> and <code>right</code> to <code>N</code> columns minus an inner gutter</li>
      </ul>
    </li>
  </ul>

  <h3>For use outside of <code>.container</code>, or <code>.breakout</code> or some other width of container (added in <code>v3.6.0</code>)</h3>
  <ul>
    <li>
      <strong><a href="#vwvariants">viewwidth calc</a></strong> variants:
      <ul>
        <li><code>.*-vw</code> where <code>*</code> is any of the above classes, eg: <code>.w-4-cols-vw</code>, <code>.mr-2-cols-vw</code> etc. useful if your element's container is not </li>
      </ul>
    </li>
  </ul>

  <p>Each of these have tailwind responsive classes and all settings are breakpoint+, <a href="#responsive">read about responsive usage</a>.</p>

  <p>Nesting of elements is also possible, <a href="#nesting">read about nesting usage</a>.</p>

  <h3 id="v3-0-0">Breaking changes at <code>v3.0.0</code></h3>

  <p><code>v3.0.0</code> brings in Tailwind like naming to the width and margin classes, transitioning from <code>.cols-2</code> to <code>.w-2-cols</code> and from <code>.push-2</code> to <code>.ml-2-cols</code>. This is to give a better expectation of what those classes do, align positioning classes with width/push/pull classes and closer align with Tailwind.</p>

  <h4>Migrating to <code>v3.0.0</code></h4>

  <p>If you're ok with doing some regex, its possible to transition to <code>v3.0.0</code> by:</p>

  <ol>
    <li>Search for <code>cols-(\d\/\d|\d+)</code></li>
    <li>Replace with <code>w-$1-cols</code></li>
  </ol>

  <p>And then perform similar searches for <code>push</code>, <code>push-r</code>, <code>pull</code> and <code>pull-r</code> and replace with <code>ml</code>, <code>mr</code>, <code>-ml</code> and <code>-mr</code> as appropriate.</p>

  <h2 id="setup">Setup</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">tailwind.config.js</figcaption>
    <pre class="code-example-code"><code class="language-javascript">const { Setup, Layout } = require('@area17/a17-tailwind-plugins');

module.exports = {
  ...
  plugins: [Setup, Layout],
  theme: {
    screens: {
      xs: "0",
      sm: "544px",
      md: "650px",
      lg: "990px",
      xl: "1300px",
      xxl: "1520px"
    },
    mainColWidths: {
      xs: "auto",
      sm: "auto",
      md: "auto",
      lg: "auto",
      xl: "auto",
      xxl: "1440px"
    },
    innerGutters: {
      xs: "10px",
      sm: "15px",
      md: "20px",
      lg: "30px",
      xl: "40px",
      xxl: "40px"
    },
    outerGutters: {
      xs: "20px",
      sm: "30px",
      md: "40px",
      lg: "40px",
      xl: "40px",
      xxl: "0px"
    },
    columnCount: {
      xs: "4",
      sm: "4",
      md: "8",
      lg: "12",
      xl: "12",
      xxl: "12"
    },
  }
  ...
};</code></pre>
  </figure>

  <p>Requires <code>Setup</code> plugin with <code>theme.screens</code>, <code>theme.mainColWidths</code>, <code>theme.innerGutters</code>,
  <code>theme.outerGutters</code> and <code>theme.columnCount</code> configured.</p>

  <h2 id="demo">Demo</h2>

  <h3 class="number">Using number of desired columns</h3>

  <p>Basic usage of the <code>.w-N-cols</code> classes:</p>

</div>

<div class="show-grid">
  <div class="w-1-cols h-40 bg-column mt-20">w-1-cols</div>
  <div class="w-2-cols h-40 bg-column mt-20">w-2-cols</div>
  <div class="w-3-cols h-40 bg-column mt-20">w-3-cols</div>
  <div class="w-4-cols h-40 bg-column mt-20">w-4-cols</div>
  <div class="w-5-cols h-40 bg-column mt-20">w-5-cols</div>
  <div class="w-6-cols h-40 bg-column mt-20">w-6-cols</div>
  <div class="w-7-cols h-40 bg-column mt-20">w-7-cols</div>
  <div class="w-8-cols h-40 bg-column mt-20">w-8-cols</div>
  <div class="w-9-cols h-40 bg-column mt-20">w-9-cols</div>
  <div class="w-10-cols h-40 bg-column mt-20">w-10-cols</div>
  <div class="w-11-cols h-40 bg-column mt-20">w-11-cols</div>
  <div class="w-12-cols h-40 bg-column mt-20">w-12-cols</div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="w-1-cols">&lt;/div>
&lt;div class="w-2-cols">&lt;/div>
&lt;div class="w-3-cols">&lt;/div>
&lt;div class="w-4-cols">&lt;/div>
&lt;div class="w-5-cols">&lt;/div>
&lt;div class="w-6-cols">&lt;/div>
&lt;div class="w-7-cols">&lt;/div>
&lt;div class="w-8-cols">&lt;/div>
&lt;div class="w-9-cols">&lt;/div>
&lt;div class="w-10-cols">&lt;/div>
&lt;div class="w-11-cols">&lt;/div>
&lt;div class="w-12-cols">&lt;/div></code></pre>
  </figure>

  <p>As the plugin reads the config, it works out the maximum amount of columns it needs - so if your smallest breakpoint has 4 design columns and the largest has 12 - then it will create classes <code>.w-1-cols</code> through <code>.w-12-cols</code>.</p>

  <h3 class="fraction">Using a fraction</h3>

  <p>Sometimes you want a simpler layout scheme, using %ages of the container width rather than column numbers, but still taking into account the inner gutters. For this you can use fractions.</p>

  <p>Fractions can be any of <code>1/2</code>, <code>1/3</code>, <code>1/4</code>, <code>2/3</code> or <code>3/4</code>.</p>

  <p><strong>Note</strong> Fractions are consistent across all breakpoints. So, <code>1/2</code> will be 50% minus some inner gutter on all breakpoints set, unlike setting via columns whose apparent width will change if the total number of design columns at a breakpoint changes.</p>
</div>

<div class="show-grid">
  <div class="w-1/4-cols h-40 bg-column mt-20">w-1/4-cols</div>
  <div class="w-1/3-cols h-40 bg-column mt-20">w-1/3-cols</div>
  <div class="w-1/2-cols h-40 bg-column mt-20">w-1/2-cols</div>
  <div class="w-2/3-cols h-40 bg-column mt-20">w-2/3-cols</div>
  <div class="w-3/4-cols h-40 bg-column mt-20">w-3/4-cols</div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="w-1/4-cols h-40 bg-column mt-20">&lt;/div>
&lt;div class="w-1/3-cols h-40 bg-column mt-20">&lt;/div>
&lt;div class="w-1/2-cols h-40 bg-column mt-20">&lt;/div>
&lt;div class="w-2/3-cols h-40 bg-column mt-20">&lt;/div>
&lt;div class="w-3/4-cols h-40 bg-column mt-20">&lt;/div></code></pre>
  </figure>

  <hr/>

  <h3 id="responsive">Responsive</h3>

  <p>If you use <code>w-10-cols</code> and your smallest breakpoint only has 4 design columns then you may also want to use <code>max-w-full</code> to stop a container being wider than 100%. Or better, use <code>w-4-cols</code> and <code>lg:w-10-cols</code>.</p>

  <p>Which will be 4 design columns wide until the <code>lg</code> breakpoint, when it will become 10 columns wide:</p>
</div>

<div class="show-grid">
  <div class="w-4-cols lg:w-10-cols h-40 bg-column mt-20">w-4-cols lg:w-10-cols</div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="w-4-cols lg:w-10-cols">&lt;/div></code></pre>
  </figure>

  <p>And of course, can assign different sizes at all of your breakpoints:</p>
</div>

<div class="show-grid">
  <div class="w-4-cols sm:w-3-cols md:w-6-cols lg:w-10-cols xl:w-8-cols xxl:w-6-cols h-40 bg-column mt-20">w-4-cols sm:w-3-cols md:w-6-cols lg:w-10-cols xl:w-8-cols xxl:w-6-cols</div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="w-4-cols sm:w-3-cols md:w-6-cols lg:w-10-cols xl:w-8-cols xxl:w-6-cols">&lt;/div></code></pre>
  </figure>

  <p>As previously mentioned, fractions will be consistent on all breakpoints. They can of course be changed per breakpoint:</p>

</div>

<div class="show-grid">
  <div class="w-3/4-cols md:w-1/2-cols lg:w-2/3-cols xl:w-1/2-cols h-40 bg-column mt-20">w-3/4-cols md:w-1/2-cols lg:w-2/3-cols xl:w-1/2-cols</div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="w-3/4-cols md:w-1/2-cols lg:w-2/3-cols xl:w-1/2-cols h-40 bg-column mt-20">&lt;/div></code></pre>
  </figure>

  <hr/>

  <h3 id="nesting">Nesting</h3>

  <p>When using a <code>N</code> number of columns, you can nest elements:</p>

</div>

<div class="show-grid">
  <div class="w-8-cols h-120 bg-column mt-20 py-20">
    <div class="w-6-cols h-80 bg-column-alt py-20">
      <div class="w-4-cols h-40 bg-column">w-4-cols inside w-6-cols inside w-8-cols</div>
    </div>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="w-8-cols h-120 bg-column mt-20 py-20">
  &lt;div class="w-6-cols h-80 bg-column-alt py-20">
    &lt;div class="w-4-cols h-40 bg-column">8&lt;/div>
  &lt;/div>
&lt;/div></code></pre>
  </figure>

  <h4>Nesting Fractional Columns</h4>

  <p>Nesting fractions inside fractions will work, but instead halving the breakpoint's total columns, you'll the containers total columns. And so, if you have 12 design columns and you insert <code>w-1/2-cols</code> inside <code>w-1/2-cols</code>, you'll get one 6 design column wide element wrapping a 3 design column wide element:</p>
</div>

<div class="show-grid">
  <div class="w-1/2-cols h-80 bg-column-alt mt-20 py-20">
    <div class="w-1/2-cols h-40 bg-column">w-1/2-cols inside w-1/2-cols</div>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="w-1/2-cols">
  &lt;div class="w-1/2-cols">&lt;/div>
&lt;/div></code></pre>
  </figure>

  <p>Mixing and matching <code>N</code> cols widths and fractional widths when nesting may give you unexpected results. A fraction as a child of a <code>N</code> cols width will work as expected:</p>
</div>

<div class="show-grid">
  <div class="w-8-cols h-80 bg-column-alt mt-20 py-20">
    <div class="w-1/2-cols h-40 bg-column">w-1/2-cols inside w-8-cols</div>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="w-8-cols">
  &lt;div class="w-1/2-cols">&lt;/div>
&lt;/div></code></pre>
  </figure>

  <p><strong>But</strong>, placing a <code>N</code> cols widths inside a fractional width column will not work as fractional widths work cross breakpoint regardless of column count and so don't set/reset the columns total inside themselves. In this scenario, the <code>N</code> cols width assumes the fractional width column container has total columns at that breakpoint. So, if you have 12 design columns and you set a <code>w-3-cols</code> inside of <code>w-1/2-cols</code>, you'll end up with a 1.5 column wide child column:</p>
</div>

<div class="show-grid">
  <div class="w-1/2-cols h-80 bg-column-alt mt-20 py-20">
    <div class="w-3-cols h-40 bg-column">w-1/2-cols inside w-8-cols</div>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="w-1/2-cols h-80">
  &lt;div class="w-3-cols h-40">&lt;/div>
&lt;/div></code></pre>
  </figure>

  <p>You end up with a 1.5 wide column in that example because 3/12 columns is 1/4 of the total columns, the fractional 1/2 shrinks the 12 columns to fit in a 6 col wide contaner, 1/4 of 6 is 1.5.</p>

  <hr/>

  <h3 id="grid">Compatibility with <code>GridLayout</code> plugin</h3>

  <p>As both plugins use the same set of <code>:root</code> variables, they can be nested inside of each other:</p>

</div>

<div class="show-grid">
  <div class="w-8-cols bg-column mt-20">
    <div class="grid-layout">
      <div class="grid-col-span-2 h-40 bg-column-alt"></div>
      <div class="grid-col-span-3 h-40 bg-column-alt"></div>
      <div class="grid-col-span-1 h-40 bg-column-alt"></div>
    </div>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="w-8-cols">
  &lt;div class="grid-layout">
    &lt;div class="grid-col-span-2">&lt;/div>
    &lt;div class="grid-col-span-3">&lt;/div>
    &lt;div class="grid-col-span-1">&lt;/div>
  &lt;/div>
&lt;/div></code></pre>
  </figure>

  <hr/>

  <h3 id="flexed">Inside <code>.cols-container</code></h3>

  <p>If you want to make layout grids, using flex as opposed to CSS Grid, you may want to use <code>.cols-container</code>. This adds some auto gutter margins to <code>.w-N-cols</code> children:</p>
</div>

<div class="show-grid">
  <div class="cols-container mt-20">
    <div class="w-1-cols h-40 bg-column"></div>
    <div class="w-1-cols h-40 bg-column"></div>
    <div class="w-1-cols h-40 bg-column"></div>
    <div class="w-1-cols h-40 bg-column"></div>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="cols-container">
  &lt;div class="w-1-cols">&lt;/div>
  &lt;div class="w-1-cols">&lt;/div>
  &lt;div class="w-1-cols">&lt;/div>
  &lt;div class="w-1-cols">&lt;/div>
&lt;/div></code></pre>
  </figure>

  <p><code>.cols-container</code> has a negative gutter margin left. <br>Fractions, responsive and nesting works within <code>.cols-container</code>.</p>

  <p>If you need to zero out the margin left for some reason, you can use <code>ml-0</code>:</p>
</div>

<div class="show-grid">
  <div class="cols-container mt-20">
    <div class="w-1-cols h-40 bg-column"></div>
    <div class="w-2-cols ml-0 h-40 bg-column-alt"></div>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="cols-container">
  &lt;div class="w-1-cols">&lt;/div>
  &lt;div class="w-2-cols ml-0">&lt;/div>
&lt;/div></code></pre>
  </figure>

  <p>(<code>ml-0</code> is essentially Tailwind's <code>ml-0</code> but with a child relationship selector to add weight to the selector)</p>

  <hr/>

  <h3 id="margins">Margins</h3>

  <p>Classes for <code>.ml-</code>, <code>.mr-</code> and <code>.mx-</code>, and their negative equivilants (<code>.-ml-</code>, <code>.-mr-</code>, <code>.-mx-</code>) are also generated:</p>
</div>

<div class="show-grid">
  <div class="cols-container mt-20">
    <div class="w-1-cols ml-2-cols h-40 bg-column"></div>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="cols-container">
  &lt;div class="w-1-cols ml-2-cols">&lt;/div>
&lt;/div></code></pre>
  </figure>

  <p>If your content is aligned right, say with <code>justify-end</code> and you want to push items away from the right, you can use <code>mr-N-cols</code>:</p>
</div>

<div class="show-grid">
  <div class="flex flex-row justify-end">
    <div class="w-1-cols mr-1-cols h-40 bg-column"></div>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="flex flex-row justify-end">
  &lt;div class="w-1-cols mr-1-cols h-40 bg-column">&lt;/div>
&lt;/div></code></pre>
  </figure>

  <p>You can also push by fractions, which by their design, account for gutters:</p>
</div>

<div class="show-grid">
  <div class="flex flex-row mt-20">
    <div class="w-1/3-cols ml-2/3-cols h-40 bg-column">w-1/3-cols ml-2/3-cols</div>
  </div>
</div>

<div class="copy">

  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="flex flex-row">
  &lt;div class="w-1/3-cols ml-2/3-cols">&lt;/div>
&lt;/div></code></pre>
  </figure>

  <p>And, within <code>.cols-container</code>:</p>
</div>

<div class="show-grid">
  <div class="cols-container mt-20">
    <div class="w-1/2-cols ml-1/4-cols h-40 bg-column">w-1/2-cols ml-1/4-cols</div>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="cols-container">
  &lt;div class="w-1/2-cols ml-1/4-cols">&lt;/div>
&lt;/div></code></pre>
  </figure>

  <hr/>

  <h3 id="padding">Padding</h3>

  <p>Much like margins, padding classes are also generated: <code>.pl-</code>, <code>.pr-</code> and <code>.px-</code></p>
</div>

<div class="show-grid">
  <div class="pl-2-cols pr-4-cols bg-column-alt h-80 pt-20 mt-20">
    <div class="bg-column h-40">100% wide inside of pl-2-cols pr-4-cols</div>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="pl-2-cols pr-4-cols">
  &lt;div>&lt;/div>
&lt;/div></code></pre>
  </figure>

  <p>Padding and nesting do not mix very well, as the padded amount isn't accounted for in the width calc. Fractional widths will still align to the grid:</p>
</div>

<div class="show-grid">
  <div class="pl-2-cols bg-column-alt h-80 pt-20 mt-20">
    <div class="w-1/2-cols bg-column h-40">w-1/2-cols inside of pl-2-cols</div>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="pl-2-cols">
  &lt;div class="w-1/2-cols">&lt;/div>
&lt;/div></code></pre>
  </figure>

  <p>In our 12 design columm grid, padding the left by 2 columns leaves 10 columns, 1/2 of 10 is 5 and so the child div in the example above is 5 design columns wide.</p>

  <hr/>

  <h3 id="positioning">Positioning</h3>

  <p>You can also <code>.left-N-cols</code>, <code>.left-N-cols-gutter</code>, <code>.right-N-cols</code> and <code>.right-N-cols-gutter</code> for <code>position: absolute;</code> type positioning (or maybe with <code>position: relative;</code> depending on your use case).</p>

  <p>Fractions and responsive work as expected and nesting will work, if you apply a <code>w-N-cols</code> class.</p>
</div>

<div class="show-grid">
  <div class="relative h-96 mt-20">
    <div class="w-3-cols h-40 bg-column absolute top-0 left-1-cols">w-3-cols left-1-cols</div>
    <div class="w-1/3-cols h-40 bg-column absolute top-56 left-1/3-cols">w-1/3-cols left-1/3-cols</div>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="relative h-96 mt-20">
  &lt;div class="w-3-cols h-40 bg-column absolute top-0 left-1-cols">w-3-cols left-1-cols&lt;/div>
  &lt;div class="w-1/3-cols h-40 bg-column absolute top-56 left-1/3-cols">w-1/3-cols left-1/3-cols&lt;/div>
&lt;/div></code></pre>
  </figure>

  <p>Push and pull classes, with or without gutters, will also work:</p>
</div>

<div class="show-grid">
  <div class="relative h-80 mt-20">
    <div class="w-2-cols h-40 bg-column absolute top-0 left-0 ml-2-cols">left-0 ml-2-cols</div>
    <div class="w-2-cols h-40 bg-column absolute top-40 right-0 mr-2-cols">right-0 mr-2-cols</div>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="relative h-80">
  &lt;div class="w-2-cols h-40 bg-column absolute top-0 left-0 ml-2-cols">&lt;/div>
  &lt;div class="w-2-cols h-40 bg-column absolute top-40 right-0 mr-2-cols">&lt;/div>
&lt;/div></code></pre>
  </figure>

  <h2 id="gutterless">Gutter-less classes</h2>

  <p>Margin, padding and positioning classes also have gutter-less versions. That is, you can position things to the edge of the preceding column rather than the following column:</p>
</div>

<div class="show-grid">
  <div class="cols-container mt-20">
    <div class="w-3-cols ml-2-cols-no-gutter h-40 bg-column">w-3-cols ml-2-cols-no-gutter</div>
  </div>
</div>

<div class="copy">
  <figure class="code-example">
    <figcaption class="code-example-filename">document.html</figcaption>
    <pre class="code-example-code"><code class="language-html">&lt;div class="cols-container">
  &lt;div class="w-3-cols ml-2-cols-no-gutter">&lt;/div>
&lt;/div></code></pre>
  </figure>

  <h2 id="vwvariants"><code>vw</code> calc variants</h2>

  <p>Added in <code>v3.6.0</code></p>

  <p>Regular layout classes <code>w-3-cols</code> use a CSS <code>calc()</code> based on <code>100%</code> container width and a <code>--grid-columns</code> variable to split the container width as required.</p>

  <p>Sometimes, you might need to set an element on the grid, where you container is some other width, such as inside <code>.breakout</code>'s or perhaps inside a carousel. In these case the standard <code>w-3-cols</code> type classes may not work, and you may need to use <code>vw</code> based alternatives.</p>
</div>

<div class="show-grid">
  <div class="breakout mt-20">
    <div class="w-4-cols ml-outer-gutter bg-column">
      <p>using <code>w-4-cols</code> ❌ - too wide</p>
    </div>

    <div class="w-4-cols-vw ml-outer-gutter bg-column mt-20">
      <p>using <code>w-4-cols-vw</code> ✅ - on grid</p>
    </div>
  </div>
</div>

<div class="copy">
    <figure class="code-example">
      <figcaption class="code-example-filename">document.html</figcaption>
      <pre class="code-example-code"><code class="language-html">&lt;div class="breakout">
  &lt;div class="w-4-cols ml-outer-gutter">
    &lt;p>using &lt;code>w-4-cols&lt;/code> ❌ - too wide&lt;/p>
  &lt;/div>

  &lt;div class="w-4-cols-vw ml-outer-gutter">
    &lt;p>using &lt;code>w-4-cols-vw&lt;/code> ✅ - on grid&lt;/p>
  &lt;/div>
&lt;/div></code></pre>
    </figure>

  <p><code>w-4-cols</code> draws the <code>div</code> too wide, as the parent container is wider than <code>.container</code>. The suffix of <code>-vw</code> alters the calc to base the calcs off of <code>100vw</code>.</p>

  <p>But, to make this work, we need to account for the scroll bar width.</p>

  <h3 id="scrollbarwidth">Additional set up for working with gutters inside <code>.breakout</code></h3>

  <p>The <code>.*-vw</code> type classes uses <code>100vw</code> as its base, which, frustratingly is likely wider than the document as the document can take up <code>100vw</code> minus the scroll bar width. So, to use <code>.*-vw</code> type classes, we need to account for the scrollbar width:</p>

  <figure class="code-example">
    <figcaption class="code-example-filename">application.js</figcaption>
    <pre class="code-example-code"><code class="language-javascript">const scrollbox = document.createElement('div');
scrollbox.style.overflow = 'scroll';
document.body.appendChild(scrollbox);

// Compare inner and out widths of the box to determine scroll bar width
const scrollBarWidth = scrollbox.offsetWidth - scrollbox.clientWidth;

document.body.removeChild(scrollbox);
document.documentElement.style.setProperty('--scrollbar-width', `${ scrollBarWidth }px`);

// test is scroll bar is visible
function setScrollBarVisible() {
  const scrollBarVisible = document.documentElement.scrollHeight > document.documentElement.clientHeight;
  const overflowYSet = window.getComputedStyle(document.documentElement, null).getPropertyValue('overflow-y') === 'scroll';
  document.documentElement.style.setProperty('--scrollbar-visible-width', `${ scrollBarVisible || overflowYSet ? scrollBarWidth : 0 }px`);
}

window.addEventListener('load', setScrollBarVisible, false);
window.addEventListener('resized', setScrollBarVisible, false);
setScrollBarVisible();</code></pre>
  </figure>

  <p>This also makes sure the <code>.p?-outer-gutter</code> type <a href="/Container.php">Breakout</a> classes (<code>.w-2-cols-vw</code>, <code>.ml-2-cols-vw</code> etc.) will work correctly inside of <code>.breakout</code> type content.</p>
</div>


<?php include 'includes/_footer.php'; ?>
