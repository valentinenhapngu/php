<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Homepage demo PHP </title>
    <!--<style> </style>-->
    <link rel="stylesheet" href="../css/demo.css">
    <script type="text/javascript" src="../js/jquery-3.5.1.min.js"> </script>
</head>

<body>
    <div id="container">
        <header>
            <?php
            require "home_header.php"
           ?>

        </header>

        <section class="clear" id="sectionHome">
            <hgroup>
                <h2>Bai demo PHP</h2>
            </hgroup>

            <div id="content">

                <div id="concept" class="col15">
                    <?php
                    require "home_col1_concept.php"
                   ?>
                </div>

                <div id="conceptList" class="col15">
                    <?php
                    require "home_col2_conceptList.php"
                   ?>
                </div>

                <div id="phpViewCode" class="col70" >
                    
                </div>
                
                <div id="phpViewDemo" class="clear" style="min-height: 300px;">
                    
                </div>
                
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('.hahaa').click(function (e) {
                            var file = $(this).attr('data-value');
                            $.ajax({
                                url: file,
                                method: 'get',
                                data: {
                                    id: 1,
                                    test: 'name'
                                }
                                } ).done(function (result) {

                                   // $('#phpViewCode').html(result)
                                    $('#phpViewCode').text(result);
                                 $('#phpViewDemo').load('home_col3_phpViewDemo_Ajax_2.php', {
                                        'method': "hello",
                                        'fileName' : "home_col3_phpViewCode_3.php"
                                    });
//                                    $('#phpViewDemo').load('home_col3_phpViewDemo_Ajax_2.php', {
//                                        'method': "hello",
//                                        'fileName' : "home_col3_phpViewCode_3.php"
//                                    });
                                })
                        })
                    });

                </script>

            </div>

        </section>


        <footer class="clear" id="footer">
            <p>Footer</p>
        </footer>

    </div>
</body>

</html>
