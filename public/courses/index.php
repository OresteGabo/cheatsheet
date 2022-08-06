<?php
include('../private/initialise.php');

$page_title="index title";
?>

<!doctype html>
<html lang="en">
<?php
require_once(SHARED_PATH.'/head.php');

?>
<body>
<header>
    <?php
    require_once(SHARED_PATH.'/navigation.php');
    ?>
</header>

<div id="wrapper">
    <div id="page-banner">
        <h1 class="title">INTRO TO FLUTTER</h1>
        <p>My FLUTTER CHEATSHEET</p>
    </div>
    <div id="cheat-list">
        <h2 class="title">Hacks to use in my pages</h2>
        <ul>
            <li>
                <strong class="li-key">Text</strong> in flutter can be styled as follow
                <div class="code">
                            <pre class="code">
<code><span class="datatype">Text</span>(</code>
<code>  '<span class="value string">Hello again</span>',</code>
<code>  <span class="property">style</span>: <span class="datatype">TextStyle</span>(</code>
<code>    <span class="property">fontSize</span>: 24,</code>
<code>    <span class="property">fontWeight</span>: <span class="datatype">FontWeight</span>.bold,</code>
<code>  ),</code>
<code>),</code>
</pre>
<p class="code-title">The text widget in flutter</p>
                </div>

            </li>
            <li>
                <strong class="li-key">Padding</strong> is used as a normal web padding
                however, there is no margin property, to leave a space between widgets, a <span class="widget"><strong>SizedBox</strong></span> widget is used, with <em>height</em> and or <em>width</em> property
                <div class="code">
                
                    <pre class="code">
<code><span class="comment">//Padding widget is just the same as web padding</span></code>
<code><span class="datatype">Padding</span>(</code>
<code>	<span class="property">padding</span>: <span class="keyword">const</span> <span class="datatype">EdgeInsets</span>.symmetric(</code>
<code>	  <span class="property">horizontal</span>: 25,</code>
<code>	),</code>
<code>	<span class="property">child</span>: <span class="datatype">Container</span>(</code>
<code>	  <span class="property">decoration</span>: <span class="datatype">BoxDecoration</span>(</code>
<code>	    <span class="property">color</span>: <span class="datatype">Colors</span>.deepPurple,</code>
<code>	    <span class="property">borderRadius</span>: <span class="datatype">BorderRadius</span>.circular(12.0),</code>
<code>	  ),</code>
<code>	  <span class="property">child</span>: <span class="datatype">Padding</span>(</code>
<code>	    <span class="property">padding</span>: <span class="keyword">const</span> <span class="datatype">EdgeInsets</span>.all(18.0),</code>
<code>	    <span class="property">child</span>: <span class="datatype">Center</span>(</code>
<code>	      <span class="property">child</span>: <span class="datatype">Text</span>(</code>
<code>		'<span class="value string">Login</span>',</code>
<code>		<span class="property">style</span>: <span class="datatype">TextStyle</span>(</code>
<code>		  <span class="property">color</span>: <span class="datatype">Colors</span>.white,</code>
<code>		  <span class="property">fontSize</span>: 15,</code>
<code>		  <span class="property">fontWeight</span>: <span class="datatype">FontWeight</span>.bold,</code>
<code>		),</code>
<code>	      ),</code>
<code>	    ),</code>
<code>	  ),</code>
<code>	),</code>
<code>),</code></pre>
                    <p class="code-title">Padding example code sample in flutter   </p>
                </div>

            </li>


            <li>
                <span class="name">Brief history of human kind</span>
            </li>
            <li>
                Rich dad poor dad
            </li>
        </ul>
    </div>
    <div >
        <h2 class="title">Common mistakes </h2>
        <ul>


            <li>
                <span class="name">Line-height: determines the vertical spaces between lines, whe it is set to 2em, it double the original size</span>
            </li>
            <li>
                    <span class="name">
                        white-space: nowrap; suppose u dont want a piece of text to take a ne line, nomatter how large it is, u just need it on 1 single line, u have to set white-space to nowrap, the applies to div ,...
                    </span>
            </li>
        </ul>
    </div>
</div>
<?php 
require_once('pages/page_parts/footer.php');
?>
<script src="script.js"></script>
</body>
</html>
