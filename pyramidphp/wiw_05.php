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
                for ($kawinthara=4;$kawinthara>=$wiw;$kawinthara--)
                {
                    echo " ";
                }
                    echo $wiw;
                for ($kawinthara=2;$kawinthara<=$wiw;$kawinthara++)
                {
                    echo "**";
                }
                    echo $wiw;
            
            echo "<br/>";
            }
            
            for ($wiw=2;$wiw<=4;$wiw++)
            {
             
                for ($kawinthara=1;$kawinthara<=$wiw;$kawinthara++)
                {
                    echo " ";
                }
                    echo 5-$wiw;
                for ($kawinthara=3;$kawinthara>=$wiw;$kawinthara--)
                {
                    echo "**";
                }
                    echo 5-$wiw;
            
            echo "<br/>";
            }
        ?>
    </pre>
</body>