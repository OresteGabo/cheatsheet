<?php
/*
U need to set the title variable for $page_title
 */
  require_once ('../../../private/initialise.php');
  
  $page_title="La généricité en Java";
  
?>

<!DOCTYPE html>
<html lang="fr">
<?php
require_once(SHARED_PATH.'/head.php');

?>
<body>
  <header>
    <?php require_once(SHARED_PATH.'/navigation/coursenav.php');
    ?>
    </header>
    <aside   class="table-of-content">
        <h3 class="title">La généricité en Java</h3>
        <nav class=>
          <ul>
              <li><a href="">Introduction</a></li>
              <li><a href="">Définition d’une classe générique</a></li>
              <li><a href="">Restriction des types admis</a></li>
              <li><a href="">Méthodes génériques</a>
                <ul>
                  <li><a href="">Sûreté du typage</a></li>
                  <li><a href="">Inférence de type</a></li>
                 
                </ul>
              </li>
              <li><a href="">Le joker (wildcard)</a>
                <ul>
                  <li><a href="#">Le joker expliqué par l’exemple</a></li>
                  <li><a href="#">L’utilisation du joker borné avec extends expliqué par
l’exemple</a></li>
                  <li><a href="#">L’utilisation du joker borné avec super expliqué par
l’exemple</a></li>
                  
                  <li><a href="#"></a></li>
                </ul>
              </li>
            <li><a href="#">Effacement</a></li>
            <li><a href="#">Tableaux</a></li>
            <li><a href="#">Exercices</a></li>
          </ul>
        </nav>

      </aside>
    <div id="wrapper">
      
<div class="container">

    <div class="container">
      
        <main class="content">
          <section class="chapter">
            <h1 class="title">Introduction</h1>
            <div class="content">
              <p>
                Utiliser des classes génériques, comme on l’a vu dans un cours précédent, est
relativement simple et recommandé, voire obligatoire.
              </p>
              <p>Créer des classes génériques est un peu plus compliqué. Cela nécessite de bien
comprendre les mécanismes sous-jacents. C’est ce dont ce cours traite.</p>
            </div>
          </section>
          <section class="chapter">
            <h1 class="title">This is the First chapter title</h1>
            <div class="content">
              <p>La définition d’une classe générique peut se faire très simplement. Il suffit de
faire suivre le nom de la classe par un nom de paramètre de type (terme consacré)
ou même une liste de noms de paramètres de type entre « chevrons » ( <> ).</p>
              <p>
                L’exemple qui suit montre une classe dont les instances réunissent deux valeurs
d’un même type, connu seulement au moment de la compilation.
              </p>
              <div class="code">
              <p class="code-title">Java genericity code sample</p> 
                
<pre class="code">
<code><span class="comment">// T est un paramètre (formel) de type.</span></code>
<code><span class="comment">/* Dorénavant, un couple de n’importe quel type référence pourra être</span></code>
<code><span class="comment">instancié. */</span></code>
<code><span class="access-modifier">public</span> <span class="keyword">class</span> <span class="datatype">Couple</span>&lt;<span class="datatype">T</span>&gt; {</code>
<code>	<span class="comment">// Les attributs sont de type T.</span></code>
<code>	<span class="access-modifier">public</span> <span class="keyword">final</span> <span class="datatype">T</span> <span class="property">un</span>, <span class="property">deux</span> ; <span class="comment">// Il n’est pas encore connu.</span></code>
<code>	<span class="access-modifier">public</span> <span class="datatype">Couple</span>(<span class="datatype">T</span> <span class="property">un</span>, <span class="datatype">T</span> <span class="property">deux</span>) {</code>
<code>		<span class="keyword">this</span>.<span class="property">un</span> = <span class="property">un</span> ; <span class="keyword">this</span>.<span class="property">deux</span> = <span class="property">deux</span> ;</code>
<code>	}</code>
<code>}</code>
</pre>
                        
                        
                        </div>
                </div>
          </section>
          <section class="chapter">
            <h1 class="title">This is the First chapter title</h1>
            <div class="content">
              <p>La définition d’une classe générique peut se faire très simplement. Il suffit de
faire suivre le nom de la classe par un nom de paramètre de type (terme consacré)
ou même une liste de noms de paramètres de type entre « chevrons » ( <> ).</p>
              <p>
                L’exemple qui suit montre une classe dont les instances réunissent deux valeurs
d’un même type, connu seulement au moment de la compilation.
              </p>
              <div class="code">
              <p class="code-title">Java genericity code sample</p> 
                
<pre class="code">
<code><span class="comment">// T est un paramètre (formel) de type.</span></code>
<code><span class="comment">/* Dorénavant, un couple de n’importe quel type référence pourra être</span></code>
<code><span class="comment">instancié. */</span></code>
<code><span class="access-modifier">public</span> <span class="keyword">class</span> <span class="datatype">Couple</span>&lt;<span class="datatype">T</span>&gt; {</code>
<code>	<span class="comment">// Les attributs sont de type T.</span></code>
<code>	<span class="access-modifier">public</span> <span class="keyword">final</span> <span class="datatype">T</span> <span class="property">un</span>, <span class="property">deux</span> ; <span class="comment">// Il n’est pas encore connu.</span></code>
<code>	<span class="access-modifier">public</span> <span class="datatype">Couple</span>(<span class="datatype">T</span> <span class="property">un</span>, <span class="datatype">T</span> <span class="property">deux</span>) {</code>
<code>		<span class="keyword">this</span>.<span class="property">un</span> = <span class="property">un</span> ; <span class="keyword">this</span>.<span class="property">deux</span> = <span class="property">deux</span> ;</code>
<code>	}</code>
<code>}</code>
</pre>
                        
                       
                        </div>
                </div>
          </section>
          <section class="chapter">
            <h1 class="title">This is the First chapter title</h1>
            <div class="content">
              <p>La définition d’une classe générique peut se faire très simplement. Il suffit de
faire suivre le nom de la classe par un nom de paramètre de type (terme consacré)
ou même une liste de noms de paramètres de type entre « chevrons » ( <> ).</p>
              <p>
                L’exemple qui suit montre une classe dont les instances réunissent deux valeurs
d’un même type, connu seulement au moment de la compilation.
              </p>
              <div class="code">
              <p class="code-title">Java genericity code sample</p> 
                
<pre class="code">
<code><span class="comment">// T est un paramètre (formel) de type.</span></code>
<code><span class="comment">/* Dorénavant, un couple de n’importe quel type référence pourra être</span></code>
<code><span class="comment">instancié. */</span></code>
<code><span class="access-modifier">public</span> <span class="keyword">class</span> <span class="datatype">Couple</span>&lt;<span class="datatype">T</span>&gt; {</code>
<code>	<span class="comment">// Les attributs sont de type T.</span></code>
<code>	<span class="access-modifier">public</span> <span class="keyword">final</span> <span class="datatype">T</span> <span class="property">un</span>, <span class="property">deux</span> ; <span class="comment">// Il n’est pas encore connu.</span></code>
<code>	<span class="access-modifier">public</span> <span class="datatype">Couple</span>(<span class="datatype">T</span> <span class="property">un</span>, <span class="datatype">T</span> <span class="property">deux</span>) {</code>
<code>		<span class="keyword">this</span>.<span class="property">un</span> = <span class="property">un</span> ; <span class="keyword">this</span>.<span class="property">deux</span> = <span class="property">deux</span> ;</code>
<code>	}</code>
<code>}</code>
</pre>
                        
                        
                        </div>
                </div>
          </section>
          <section class="chapter">
            <h1 class="title">This is the First chapter title</h1>
            <div class="content">
              <p>La définition d’une classe générique peut se faire très simplement. Il suffit de
faire suivre le nom de la classe par un nom de paramètre de type (terme consacré)
ou même une liste de noms de paramètres de type entre « chevrons » ( <> ).</p>
              <p>
                L’exemple qui suit montre une classe dont les instances réunissent deux valeurs
d’un même type, connu seulement au moment de la compilation.
              </p>
              <div class="code">
              <p class="code-title">Java genericity code sample</p> 
                
<pre class="code">
<code><span class="comment">// T est un paramètre (formel) de type.</span></code>
<code><span class="comment">/* Dorénavant, un couple de n’importe quel type référence pourra être</span></code>
<code><span class="comment">instancié. */</span></code>
<code><span class="access-modifier">public</span> <span class="keyword">class</span> <span class="datatype">Couple</span>&lt;<span class="datatype">T</span>&gt; {</code>
<code>	<span class="comment">// Les attributs sont de type T.</span></code>
<code>	<span class="access-modifier">public</span> <span class="keyword">final</span> <span class="datatype">T</span> <span class="property">un</span>, <span class="property">deux</span> ; <span class="comment">// Il n’est pas encore connu.</span></code>
<code>	<span class="access-modifier">public</span> <span class="datatype">Couple</span>(<span class="datatype">T</span> <span class="property">un</span>, <span class="datatype">T</span> <span class="property">deux</span>) {</code>
<code>		<span class="keyword">this</span>.<span class="property">un</span> = <span class="property">un</span> ; <span class="keyword">this</span>.<span class="property">deux</span> = <span class="property">deux</span> ;</code>
<code>	}</code>
<code>}</code>
</pre>
                        
                        
                        </div>
                </div>
          </section>
          <section class="chapter">
            <h1 class="title">This is the First chapter title</h1>
            <div class="content">
              <p>La définition d’une classe générique peut se faire très simplement. Il suffit de
faire suivre le nom de la classe par un nom de paramètre de type (terme consacré)
ou même une liste de noms de paramètres de type entre « chevrons » ( <> ).</p>
              <p>
                L’exemple qui suit montre une classe dont les instances réunissent deux valeurs
d’un même type, connu seulement au moment de la compilation.
              </p>
              <div class="code">
              <p class="code-title">Java genericity code sample</p> 
<pre class="code">
<code><span class="comment">// T est un paramètre (formel) de type.</span></code>
<code><span class="comment">/* Dorénavant, un couple de n’importe quel type référence pourra être</span></code>
<code><span class="comment">instancié. */</span></code>
<code><span class="access-modifier">public</span> <span class="keyword">class</span> <span class="datatype">Couple</span>&lt;<span class="datatype">T</span>&gt; {</code>
<code>	<span class="comment">// Les attributs sont de type T.</span></code>
<code>	<span class="access-modifier">public</span> <span class="keyword">final</span> <span class="datatype">T</span> <span class="property">un</span>, <span class="property">deux</span> ; <span class="comment">// Il n’est pas encore connu.</span></code>
<code>	<span class="access-modifier">public</span> <span class="datatype">Couple</span>(<span class="datatype">T</span> <span class="property">un</span>, <span class="datatype">T</span> <span class="property">deux</span>) {</code>
<code>		<span class="keyword">this</span>.<span class="property">un</span> = <span class="property">un</span> ; <span class="keyword">this</span>.<span class="property">deux</span> = <span class="property">deux</span> ;</code>
<code>	}</code>
<code>}</code>
</pre>
                        
                        
                        </div>
                </div>
          </section>
          <section class="chapter">
            <h1 class="title">This is the First chapter title</h1>
            <div class="content">
              <p>La définition d’une classe générique peut se faire très simplement. Il suffit de
faire suivre le nom de la classe par un nom de paramètre de type (terme consacré)
ou même une liste de noms de paramètres de type entre « chevrons » ( <> ).</p>
              <p>
                L’exemple qui suit montre une classe dont les instances réunissent deux valeurs
d’un même type, connu seulement au moment de la compilation.
              </p>
              <div class="code">
              <div class="accordion">
  <div>
    <input type="checkbox" name="example_accordion" id="section1" class="accordion__input">
    <label for="section1" class="accordion__label code-title">Java genericity code sample</label>
              
                
<pre class="code accordion__content">
<code><span class="comment">// T est un paramètre (formel) de type.</span></code>
<code><span class="comment">/* Dorénavant, un couple de n’importe quel type référence pourra être</span></code>
<code><span class="comment">instancié. */</span></code>
<code><span class="access-modifier">public</span> <span class="keyword">class</span> <span class="datatype">Couple</span>&lt;<span class="datatype">T</span>&gt; {</code>
<code>	<span class="comment">// Les attributs sont de type T.</span></code>
<code>	<span class="access-modifier">public</span> <span class="keyword">final</span> <span class="datatype">T</span> <span class="property">un</span>, <span class="property">deux</span> ; <span class="comment">// Il n’est pas encore connu.</span></code>
<code>	<span class="access-modifier">public</span> <span class="datatype">Couple</span>(<span class="datatype">T</span> <span class="property">un</span>, <span class="datatype">T</span> <span class="property">deux</span>) {</code>
<code>		<span class="keyword">this</span>.<span class="property">un</span> = <span class="property">un</span> ; <span class="keyword">this</span>.<span class="property">deux</span> = <span class="property">deux</span> ;</code>
<code>	}</code>
<code>}</code>
</pre>
                        
                        
                        
                        </div>
  </div>
                </div>
          </section>
          <div class="accordion">
  
  <div>
    <input type="checkbox" name="example_accordion" id="section2" class="accordion__input">
    <label for="section2" class="accordion__label">Section #2</label>
    <div class="accordion__content">
      <p>Section #2</p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sit reiciendis, ipsam quaerat,
        aperiam perspiciatis ad ullam architecto impedit natus illo nostrum molestias voluptas earum a
        voluptatibus fugiat fuga facere!
      </p>
    </div>
  </div>
  <div>
    <input type="checkbox" name="example_accordion" id="section3" class="accordion__input">
    <label for="section3" class="accordion__label">Section #3</label>
    <div class="accordion__content">
      <p>Section #3</p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sit reiciendis, ipsam quaerat,
        aperiam perspiciatis ad ullam architecto impedit natus illo nostrum molestias voluptas earum a
        voluptatibus fugiat fuga facere!
      </p>
    </div>
  </div>
</div>
            
          
        </main>
    </div>
</div>
</div>
</body>
</html>







