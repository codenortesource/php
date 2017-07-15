<pre>
&lt;?php
//cn
$a = 1;
$b = 1;
$s = 1;
$tam = 10000;

echo &quot;Serie de Fibonacci:&quot;;

while ($s &lt; $tam) {
    echo $s . &#039;&lt;br&gt;&#039;;
    $s = $a + $b;
    $a = $b;
    $b = $s;
}
?&gt;

</pre>
