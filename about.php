<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;800&display=swap" rel="stylesheet">
    <style>
                /*
        themornstar.com Reset Stylesheet
        v1.6.1
        Last Updated: 2020-07-17
        Author: Muhammad Ahad Aminul - http://themornstar.com
        Twitter: @mdahadaminul
        */
*,
*:before,
*:after {
    box-sizing: inherit;
}

html {
    box-sizing: border-box;
    -ms-text-size-adjust: 100%;
	-webkit-text-size-adjust: 100%
}
        html, body, div, span, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        abbr, address, cite, code,
        del, dfn, em, img, ins, kbd, q, samp,
        small, strong, sub, sup, var,
        b, i,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section, summary,
        time, mark, audio, video {
            margin:0;
            padding:0;
            border:0;
            outline:0;
            font-size:100%;
            vertical-align:baseline;
            background:transparent;
        }

        body {

            line-height: calc(12px + 1vw); /* Responsive Vertical Rhythm */
            font-family: 'Montserrat', sans-serif;
            font-size: calc(12px + .35vw); /* Responsive base font size */
        }

        article,aside,details,figcaption,figure,
        footer,header,hgroup,menu,nav,section {
            display:block;
        }

        nav ul {
            list-style:none;
        }

        blockquote, q {
            quotes:none;
        }

        blockquote:before, blockquote:after,
        q:before, q:after {
            content:'';
            content:none;
        }

        a {
            margin:0;
            padding:0;
            font-size:100%;
            vertical-align:baseline;
            background:transparent;
        }

        /* change colours to suit your needs */
        ins {
            background-color:#ff9;
            color:#000;
            text-decoration:none;
        }

        /* change colours to suit your needs */
        mark {
            background-color:#ff9;
            color:#000;
            font-style:italic;
            font-weight:bold;
        }

        del {
            text-decoration: line-through;
        }

        abbr[title], dfn[title] {
            border-bottom:1px dotted;
            cursor:help;
        }

        table {
            border-collapse:collapse;
            border-spacing:0;
        }

        /* change border colour to suit your needs */
        hr {
            display:block;
            height:1px;
            border:0;  
            border-top:1px solid #cccccc;
            margin:1em 0;
            padding:0;
        }

        input, select {
            vertical-align:middle;
        }

section{
	width:100%;
	height:auto;
	margin:20px;
	display: block;
}	
.container{
    padding: 0.01em 16px;
    display: block;
    width:1024px;
    margin:0px auto;
		
}




.container:after,
.container:before{
	content: "";
	display: table;
	clear: both
}
		
@media only screen and (max-width: 321px) {
    .container{
        color:#888;
    padding: 0.01em 16px;
    display: block;
    width:100%;
    margin:0px auto;
		
}
}


h1 {
	font-size: 36px
}

h2 {
	font-size: 30px
}

h3 {
	font-size: 24px
}

h4 {
	font-size: 20px
}

h5 {
	font-size: 18px
}

h6 {
	font-size: 16px
}

h1,
h2,
h3,
h4,
h5,
h6 {
	font-family: 'Montserrat', sans-serif;
	font-weight: 400;
	margin: 10px 0
}

.title{
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    font-size: 15px;
    line-height: 25px;
    padding: 25px;
    text-align: justify;
}
        
    </style>
    <title>Responsive Layout for About Page</title>
</head>
<body>
<section class="container">
    <div class="title">
    <h1>TheMornStar brand new updated world class  digital agency.</h1>
    TheMornStar is a top-of-the-line creative digital company, dedicated to enriching digital experiences by providing innovative and ingenious solutions to small and large-scale businesses. 
Every day, we strive to assist you in augmenting your brand’s online visibility, increasing reach & engagement with your target audience, and eventually driving sales.

    </div>

</section>

</body>
</html>