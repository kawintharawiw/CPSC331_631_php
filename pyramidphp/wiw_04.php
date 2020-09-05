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
            for ($wiw=1;$wiw<=4;$wiw++)
            {
                 for ($kawinthara=1;$kawinthara<=$wiw;$kawinthara++)
                 {
                    echo "*";
                 }
                 for ($kawinthara=$wiw;$kawinthara>=2;$kawinthara--)
                 {
                    echo $kawinthara;
                 }
                 for ($kawinthara=1;$kawinthara<=$wiw;$kawinthara++)
                 {
                    echo $kawinthara;
                 }
            echo "<br/>";
            }
        ?>
    </pre>
</body>