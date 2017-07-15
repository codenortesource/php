<pre>

&lt;?php

//cn

function cedula($cedula) {
    $sum = 0;
    $sumi = 0;
    for ($i = 0; $i &lt; strlen($cedula) - 2; $i++) {
        if ($i % 2 == 0) {
            $sum += substr($cedula, $i + 1, 1);
        }
    }
    $j = 0;
    while ($j &lt; strlen($cedula) - 1) {
        $b = substr($cedula, $j, 1);
        $b = $b * 2;
        if ($b &gt; 9) {
            $b = $b - 9;
        }
        $sumi += $b;
        $j = $j + 2;
    }
    $t = $sum + $sumi;
    $res = 10 - $t % 10;
    $aux = substr($cedula, 9, 9);
    if ($res == $aux) {
        return 1;
    } else {
        return 0;
    }
}

$e = &quot;1001968310&quot;;
$d = &quot;1002205980&quot;;
$e = &quot;1003887492&quot;;

echo &quot;VALOR &quot; + cedula($e) . &#039;&lt;br&gt;&#039;;
echo &quot;VALOR &quot; + cedula($d) . &#039;&lt;br&gt;&#039;;
echo &quot;VALOR &quot; + cedula($e) . &#039;&lt;br&gt;&#039;;

?&gt;

</pre>
