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
             echo$wiw,$wiw+4;
                 for ($kawinthara=1;$kawinthara<=$wiw+4;$kawinthara++)
                 {
                    echo "*";
                 }
            echo "<br/>";
            }
        ?>
    </pre>
</body>