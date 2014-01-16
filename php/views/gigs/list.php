<?php
/**
  * Author: Nick Kaye <nick@outrightmental.com>
  * Laboratory: Outright Mental Inc.
  */
?>
<!-- Button Groups
================================================== -->
<div class="bs-docs-section">
<div class="page-header">
    <h1 id="btn-groups">Button groups</h1>
</div>
<p class="lead">Group a series of buttons together on a single line with the button group. Add on optional JavaScript
    radio and checkbox style behavior with <a href="../javascript/#buttons">our buttons plugin</a>.</p>

<div class="bs-callout bs-callout-info">
    <h4>Tooltips &amp; popovers in button groups require special setting</h4>

    <p>When using tooltips or popovers on elements within a <code>.btn-group</code>, you'll have to specify the option
        <code>container: 'body'</code> to avoid unwanted side effects (such as the element growing wider and/or losing
        its rounded corners when the tooltip or popover is triggered).</p>
</div>

<h3 id="btn-groups-single">Basic example</h3>

<p>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>

<div class="bs-example">
    <div class="btn-group" style="margin: 9px 0 5px;">
        <button type="button" class="btn btn-default">Left</button>
        <button type="button" class="btn btn-default">Middle</button>
        <button type="button" class="btn btn-default">Right</button>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"btn-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Left<span
                class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Middle<span
                class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>Right<span
                class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

<h3 id="btn-groups-toolbar">Button toolbar</h3>

<p>Combine sets of <code>&lt;div class="btn-group"&gt;</code> into a <code>&lt;div class="btn-toolbar"&gt;</code> for
    more complex components.</p>

<div class="bs-example">
    <div class="btn-toolbar" role="toolbar" style="margin: 0;">
        <div class="btn-group">
            <button type="button" class="btn btn-default">1</button>
            <button type="button" class="btn btn-default">2</button>
            <button type="button" class="btn btn-default">3</button>
            <button type="button" class="btn btn-default">4</button>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-default">5</button>
            <button type="button" class="btn btn-default">6</button>
            <button type="button" class="btn btn-default">7</button>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-default">8</button>
        </div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"btn-toolbar"</span> <span class="na">role=</span><span class="s">"toolbar"</span><span
                class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span
                class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span
                class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span
                class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

<h3 id="btn-groups-sizing">Sizing</h3>

<p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to the
    <code>.btn-group</code>.</p>

<div class="bs-example">
    <div class="btn-toolbar" role="toolbar">
        <div class="btn-group btn-group-lg">
            <button type="button" class="btn btn-default">Left</button>
            <button type="button" class="btn btn-default">Middle</button>
            <button type="button" class="btn btn-default">Right</button>
        </div>
    </div>
    <div class="btn-toolbar" role="toolbar">
        <div class="btn-group">
            <button type="button" class="btn btn-default">Left</button>
            <button type="button" class="btn btn-default">Middle</button>
            <button type="button" class="btn btn-default">Right</button>
        </div>
    </div>
    <div class="btn-toolbar" role="toolbar">
        <div class="btn-group btn-group-sm">
            <button type="button" class="btn btn-default">Left</button>
            <button type="button" class="btn btn-default">Middle</button>
            <button type="button" class="btn btn-default">Right</button>
        </div>
    </div>
    <div class="btn-toolbar" role="toolbar">
        <div class="btn-group btn-group-xs">
            <button type="button" class="btn btn-default">Left</button>
            <button type="button" class="btn btn-default">Middle</button>
            <button type="button" class="btn btn-default">Right</button>
        </div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"btn-group btn-group-lg"</span><span class="nt">&gt;</span>...<span
                class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span
                class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"btn-group btn-group-sm"</span><span class="nt">&gt;</span>...<span
                class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"btn-group btn-group-xs"</span><span class="nt">&gt;</span>...<span
                class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

<h3 id="btn-groups-nested">Nesting</h3>

<p>Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a
    series of buttons.</p>

<div class="bs-example">
    <div class="btn-group">
        <button type="button" class="btn btn-default">1</button>
        <button type="button" class="btn btn-default">2</button>

        <div class="btn-group">
            <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupDrop1">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"btn-group"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>1<span
                class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-default"</span><span class="nt">&gt;</span>2<span
                class="nt">&lt;/button&gt;</span>

            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-group"</span><span
                class="nt">&gt;</span>
            <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span
                class="na">class=</span><span class="s">"btn btn-default dropdown-toggle"</span> <span class="na">data-toggle=</span><span
                class="s">"dropdown"</span><span class="nt">&gt;</span>
            Dropdown
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"caret"</span><span
                class="nt">&gt;&lt;/span&gt;</span>
            <span class="nt">&lt;/button&gt;</span>
            <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span
                class="nt">&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span
                class="nt">&gt;</span>Dropdown link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span
                class="nt">&gt;</span>Dropdown link<span class="nt">&lt;/a&gt;&lt;/li&gt;</span>
            <span class="nt">&lt;/ul&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

<h3 id="btn-groups-vertical">Vertical variation</h3>

<p>Make a set of buttons appear vertically stacked rather than horizontally.</p>

<div class="bs-example">
    <div class="btn-group-vertical">
        <button type="button" class="btn btn-default">Button</button>
        <button type="button" class="btn btn-default">Button</button>
        <div class="btn-group">
            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-default dropdown-toggle"
                    data-toggle="dropdown">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
        <button type="button" class="btn btn-default">Button</button>
        <button type="button" class="btn btn-default">Button</button>
        <div class="btn-group">
            <button id="btnGroupVerticalDrop2" type="button" class="btn btn-default dropdown-toggle"
                    data-toggle="dropdown">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop2">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
        <div class="btn-group">
            <button id="btnGroupVerticalDrop3" type="button" class="btn btn-default dropdown-toggle"
                    data-toggle="dropdown">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop3">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
        <div class="btn-group">
            <button id="btnGroupVerticalDrop4" type="button" class="btn btn-default dropdown-toggle"
                    data-toggle="dropdown">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop4">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"btn-group-vertical"</span><span class="nt">&gt;</span>
            ...
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

<h3 id="btn-groups-justified">Justified link variation</h3>

<p>Make a group of buttons stretch at the same size to span the entire width of its parent. Also works with button
    dropdowns within the button group.</p>

<div class="bs-callout bs-callout-warning">
    <h4>Element-specific usage</h4>

    <p>This only works with <code>&lt;a&gt;</code> elements as the <code>&lt;button&gt;</code> doesn't pick up the
        styles we use to justify content (some <code>display: table-cell;</code>-fu).</p>
</div>

<div class="bs-example">
    <div class="btn-group btn-group-justified">
        <a class="btn btn-default" role="button">Left</a>
        <a class="btn btn-default" role="button">Middle</a>
        <a class="btn btn-default" role="button">Right</a>
    </div>
    <br>

    <div class="btn-group btn-group-justified">
        <a class="btn btn-default" role="button">Left</a>
        <a class="btn btn-default" role="button">Middle</a>

        <div class="btn-group">
            <a class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                Right dropdown <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"btn-group btn-group-justified"</span><span class="nt">&gt;</span>
            ...
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

</div>