<?php $title = 'Scrollbar'; ?>
<?php include 'includes/_header.php'; ?>

<div class="copy">
  <h2 id="description">Description</h2>

  <p>Attempts to unify the (relatively) new CSS standard <code>scrollbar-width: *;</code> (<a href="https://developer.mozilla.org/en-US/docs/Web/CSS/scrollbar-width" target="_blank">MDN</a>) and <code>scrollbar-color: * *;</code> (<a href="https://developer.mozilla.org/en-US/docs/Web/CSS/scrollbar-color" target="_blank">MDN</a>) with the non-standard, but comically much better supported,<code>::-webkit-scrollbar</code> styles (<a href="https://developer.mozilla.org/en-US/docs/Web/CSS/::-webkit-scrollbar" target="_blank">MDN</a>).</p>

  <h3>Accessibility Concern</h3>

  <figure class="blockquote">
    <blockquote>
      <p>Use this property with caution &mdash; setting scrollbar-width to thin or none can make content hard or impossible to scroll if the author does not provide an alternative scrolling mechanism. While swiping gestures or mouse wheels can enable scrolling on such content, some devices have no scroll alternative.</p>
    </blockquote>
    <figcaption>
      <cite><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/scrollbar-width#accessibility_concerns">MDN</a></cite>
    </figcaption>
  </figure>

  <h2 id="setup">Setup</h2>

  <figure class="code-example">
    <figcaption class="code-example-filename">tailwind.config.js</figcaption>
    <pre class="code-example-code"><code class="language-javascript">const { Scrollbar } = require('@area17/a17-tailwind-plugins');

module.exports = {
  ...
  plugins: [Scrollbar],
  theme: {
    colors: {
      "grey-15": "#d9d9d9",
      "red-01": "#f00"
    },
    scrollbar: {
      track: {
        "primary": "#ADD8E6"
      },
      thumb: {
        primary: "#004F91"
      }
    }
  }
  ...
};</code></pre>
  </figure>

  <h2 id="demo">Demo</h2>

  <p>For reference, an example of standard scroll bars:</p>
</div>

<div class="flex flex-row gap-gutter overflow-x-auto pb-20 my-40 max-w-400">
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
</div>

<div class="copy">

  <p>You may need to show scrollbars in your operating system settings, but then as a web developer, you already had your scrollbars always visible, didn't you? 😉</p>

  <p>The following demos show horizontal scrollbars - the styles will apply to scrollbars in both directions.</p>

  <h3 id="thin">Thin scrollbars</h3>

  <p>Attempts to unify <code>scrollbar-width: thin;</code> (<a href="https://developer.mozilla.org/en-US/docs/Web/CSS/scrollbar-width" target="_blank">MDN</a>) and the corresponding <code>::-webkit-scrollbar</code> styles.</p>

  <p>On this plugin authors Mac, running Mac OS Big Sur and FireFox 95 - <code>scrollbar-width: thin;</code> draws a scrollbar that is <code>10px</code> wide with a <code>2px</code> internal padding.</p>

  <p>And so, as well as setting <code>scrollbar-width: thin;</code>, <code>scrollbar-thin</code> alters the scrollbars to match those numbers.</p>
</div>

<div class="flex flex-row gap-gutter overflow-x-auto pb-20 mt-40 max-w-400 scrollbar-thin">
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
</div>

<div class="copy">
    <figure class="code-example">
      <figcaption class="code-example-filename">document.html</figcaption>
      <pre class="code-example-code"><code class="language-html">&lt;div class="scrollbar-thin">...&lt;/div></code></pre>
    </figure>

    <h3 id="thin_collapsed">Thin scrollbars - collapsed</h3>

    <p><code>scrollbar-thin-collapse</code> takes advantage of the ability to collapse the padding around the scrollbar thumb for browsers that support <code>::-webkit-scrollbar</code>. For other browsers, this sets <code>scrollbar-width: thin;</code> as above.</p>
</div>

<div class="flex flex-row gap-gutter overflow-x-auto pb-20 mt-40 max-w-400 scrollbar-thin-collapse">
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
</div>

<div class="copy">
    <figure class="code-example">
      <figcaption class="code-example-filename">document.html</figcaption>
      <pre class="code-example-code"><code class="language-html">&lt;div class="scrollbar-thin-collapse">...&lt;/div></code></pre>
    </figure>

    <h3 id="hidden">Hidden scrollbars</h3>

    <p>Possible, using <code>scrollbar-none</code>, unifies <code>scrollbar-width: none;</code> and the equivalent <code>::-webkit-scrollbar</code> <code>display: none;</code>.</p>

</div>

<div class="flex flex-row gap-gutter overflow-x-auto pb-20 mt-40 max-w-400 scrollbar-none">
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
</div>

<div class="copy">
    <div class="copy">
        <figure class="code-example">
          <figcaption class="code-example-filename">document.html</figcaption>
          <pre class="code-example-code"><code class="language-html">&lt;div class="scrollbar-none">...&lt;/div></code></pre>
        </figure>
    </div>

    <h3 id="colors">Scrollbar colours</h3>

    <p>Attempts to unify <code>scrollbar-color: * *;</code> (<a href="https://developer.mozilla.org/en-US/docs/Web/CSS/scrollbar-color" target="_blank">MDN</a>) and the corresponding <code>::-webkit-scrollbar</code> styles.</p>

    <h4 id="track">Scrollbar track colour</h4>

    <p>Scrollbar track colour takes its values from your Tailwind config colors. It creates classes from <code>theme.colors</code> and <code>theme.scrollbarColor.track</code> and also name spaced and <code>theme.backgroundColor</code>.</p>

    <p>From <code>theme.theme.scrollbar.trackColor</code>, using the config in this document:</p>
</div>

<div class="flex flex-row gap-gutter overflow-x-auto pb-20 mt-40 max-w-400 scrollbar-track-primary">
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
</div>

<div class="copy">
    <figure class="code-example">
      <figcaption class="code-example-filename">document.html</figcaption>
      <pre class="code-example-code"><code class="language-html">&lt;div class="scrollbar-track-primary">...&lt;/div></code></pre>
    </figure>

    <h4 id="thumb">Scrollbar thumb colour</h4>

    <p>Scrollbar track colour takes its values from your Tailwind config colors. It creates classes from <code>theme.colors</code> and <code>theme.scrollbarColor.thumb</code> and also name spaced and <code>theme.backgroundColor</code>.</p>

    <p>From <code>theme.theme.scrollbar.thumbColor</code>, using the config in this document:</p>
</div>

<div class="flex flex-row gap-gutter overflow-x-auto pb-20 mt-40 max-w-400 scrollbar-thumb-primary">
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
</div>

<div class="copy">
    <figure class="code-example">
      <figcaption class="code-example-filename">document.html</figcaption>
      <pre class="code-example-code"><code class="language-html">&lt;div class="scrollbar-thumb-primary">...&lt;/div></code></pre>
    </figure>

    <h4 id="combining">Combining <code>scrollbar-</code> classes</h4>

    <p>Variations of combinations of <code>scrollbar-thin</code>/<code>scrollbar-thin-collapsed</code>, <code>scrollbar-track-*</code> and <code>scrollbar-thumb-*</code></p>

    <p>Using <code>scrollbar-track-*</code> and <code>scrollbar-thumb-*</code>:</p>
</div>

<div class="flex flex-row gap-gutter overflow-x-auto pb-20 mt-40 max-w-400 scrollbar-track-primary scrollbar-thumb-primary">
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
</div>

<div class="copy">
    <figure class="code-example">
      <figcaption class="code-example-filename">document.html</figcaption>
      <pre class="code-example-code"><code class="language-html">&lt;div class="scrollbar-track-primary scrollbar-thumb-primary">...&lt;/div></code></pre>
    </figure>

    <p>Using <code>scrollbar-thin</code>, <code>scrollbar-track-*</code> and <code>scrollbar-thumb-*</code>:</p>
</div>

<div class="flex flex-row gap-gutter overflow-x-auto pb-20 mt-40 max-w-400 scrollbar-thin scrollbar-track-primary scrollbar-thumb-primary">
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
</div>

<div class="copy">
    <figure class="code-example">
      <figcaption class="code-example-filename">document.html</figcaption>
      <pre class="code-example-code"><code class="language-html">&lt;div class="scrollbar-thin scrollbar-track-primary scrollbar-thumb-primary">...&lt;/div></code></pre>
    </figure>

    <p>Using <code>scrollbar-thin-collapse</code>, <code>scrollbar-track-*</code> and <code>scrollbar-thumb-*</code>:</p>
</div>

<div class="flex flex-row gap-gutter overflow-x-auto pb-20 mt-40 max-w-400 scrollbar-thin-collapse scrollbar-track-primary scrollbar-thumb-primary">
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
</div>

<div class="copy">
    <figure class="code-example">
      <figcaption class="code-example-filename">document.html</figcaption>
      <pre class="code-example-code"><code class="language-html">&lt;div class="scrollbar-thin-collapse scrollbar-track-primary scrollbar-thumb-primary">...&lt;/div></code></pre>
    </figure>

    <p>Using <code>theme.colors</code> tokens as colour names:</p>
</div>

<div class="flex flex-row gap-gutter overflow-x-auto pb-20 mt-40 max-w-400 scrollbar-thin-collapse scrollbar-track-grey-15 scrollbar-thumb-red-01">
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
</div>

<div class="copy">
    <figure class="code-example">
      <figcaption class="code-example-filename">document.html</figcaption>
      <pre class="code-example-code"><code class="language-html">&lt;div class="scrollbar-thin-collapse scrollbar-track-grey-15 scrollbar-thumb-red-0">...&lt;/div></code></pre>
    </figure>

    <p>Using <code>theme.backgroundColor</code> tokens as colour names, note the <code>bg-</code> colour name prefix:</p>
</div>

<div class="flex flex-row gap-gutter overflow-x-auto pb-20 mt-40 max-w-400 scrollbar-thin-collapse scrollbar-track-bg-column scrollbar-thumb-bg-column-alt">
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
  <div class="flex-none bg-header pointer-events-none w-100 h-40"></div>
</div>

<div class="copy">
    <figure class="code-example">
      <figcaption class="code-example-filename">document.html</figcaption>
      <pre class="code-example-code"><code class="language-html">&lt;div class="scrollbar-thin-collapse scrollbar-track-bg-column scrollbar-thumb-bg-column-alt">...&lt;/div></code></pre>
    </figure>
</div>

<?php include 'includes/_footer.php'; ?>
