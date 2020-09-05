<body>
<style>
    @font-face
        {
            font-family:TLWGTypewriter;
            src:url('rsp_tlwgtypewriter.ttf');

        }
    </style>
    <pre style="font-family:TLWGTypewriter;font-size:20px;">
        <?php echo "<br/>";
            for ($wiw=1;$wiw<=7;$wiw++)
            {
                for ($kawinthara=1;$kawinthara<=$wiw;$kawinthara++)
                {
                    echo (" ");
                }
                for ($kawinthara=6;$kawinthara>=$wiw;$kawinthara--)
                {
                    echo (($kawinthara-1)%2);
                }
                echo (($wiw)%2);
                
                for ($kawinthara=$wiw;$kawinthara<=6;$kawinthara++)
                {
                    echo (($kawinthara-1)%2);
                }
            echo ("<br/>");
            }
        ?>
    </pre>
</body>