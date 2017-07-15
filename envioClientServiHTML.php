<pre>&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;cn&lt;/title&gt; 
    &lt;/head&gt;
    &lt;body&gt;
        &lt;form action=&quot;index.php&quot; method=&quot;POST&quot; name=&quot;datos&quot; name=&quot;datos&quot;&gt;
            &lt;table border=&quot;3&quot; bgcolor=&quot;silver&quot;&gt;
                &lt;tr&gt; &lt;td&gt; ingrese Nombre: &lt;input type=&quot;text&quot; name=&quot;nombre&quot;&gt;  &lt;/td&gt; &lt;/tr&gt;
                &lt;tr&gt; &lt;td&gt; ingrese Edad: &lt;input type=&quot;text&quot; name=&quot;edad&quot;&gt;  &lt;/td&gt; &lt;/tr&gt;
                &lt;tr&gt; &lt;td&gt; &lt;input type=submit value=&quot;Suma&quot;&gt;         &lt;/td&gt; &lt;/tr&gt;
            &lt;/table&gt;
        &lt;/form&gt;

        &lt;?php
        if (isset($_REQUEST[&#039;nombre&#039;]) &amp;&amp; isset($_REQUEST[&#039;edad&#039;])) {
            $nombre = $_POST[&#039;nombre&#039;];
            $edad = $_POST[&#039;edad&#039;];
            echo $nombre . &#039;,&#039;;
            echo $edad;
        } else {
            $nombre = &#039;&#039;;
            $edad = &#039;&#039;;
        }
        ?&gt; 

    &lt;/body&gt; 
&lt;/html&gt;
</pre>
