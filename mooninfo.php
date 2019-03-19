<?php 
//original weather34 script original css/svg/php by weather34 2015-2019 clearly marked as original by weather34//
include('weather34skydata.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $analytics; ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', <?php echo $analytics; ?>);
  </script>
  <meta charset="UTF-8">
  <title>Weather34 Home Weather Moon Phase Information</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
     <style>
body,section{padding:10px}.weather34card,.weather34cards{display:-webkit-box;display:-ms-flexbox}
@font-face{font-family:weathertext2;src:url(css/fonts/verbatim-regular.woff) format("woff")}
@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}body,html{font-size:62.5%;font-family:-apple-system,BlinkMacSystemFont,weathertext,Roboto,Helvetica,Arial,sans-serif;background:#1a1d21;background:-moz-linear-gradient(top,#1a1d21 0,#1a1d21 95%,#1a1d21 95%,rgba(41,43,46,1) 10%);background:-webkit-linear-gradient(top,#1a1d21 0,#1a1d21 95%,#1a1d21 95%,rgba(41,43,46,1) 10%);background:linear-gradient(to bottom,#1a1d21 0,#1a1d21 9%,#1a1d21 95%,rgba(41,43,46,1) 10%);background-repeat:no-repeat}body{color:#aaa;overflow:hidden;height:125vh}section{width:80vw;max-width:44rem;min-width:58.9rem;margin:0 auto}.weather34title{font-size:14px;font-weight:400;padding-top:3px;font-family:Arial,sans-serif;width:400px}.weather34card__weather34-container,.weather34card__weather34-guide,.weather34card__weather34-wrapper{font-family:weathertext,sans-serif}.weather34cards{display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card,.weather34cardinfo{width:29rem;background-color:0;border-radius:4px;font-weight:400;padding:10px;position:relative;-webkit-box-orient:vertical;-webkit-box-direction:normal;color:#aaa;font-size:11px}.weather34card{height:20.5rem;display:flex;-ms-flex-direction:column;flex-direction:column;border:1px solid #444}.weather34cardinfo{height:11.5rem;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;border:1px solid #444}.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px}.weather34card__count-container,.weather34cardguide{display:-webkit-box;display:-ms-flexbox;padding:10px}.weather34card__weather34-wrapper{width:8rem;font-weight:100}.weather34cardguide{width:27rem;height:26.5rem;background-color:#2a2e33;border-radius:4px;position:relative;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:400;border:1px solid #444}.weather34card__weather34-guide{width:3rem;font-weight:200;line-height:15px}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;font-family:Arial,Helvetica,sans-serif}.weather34card__count-text{font-family:Arial,Helvetica,sans-serif;text-align:center}.weather34card__count-text--bigsun{font-size:18px;font-weight:100;font-family:weathertext2,sans-serif;position:absolute;text-align:center;margin-left:95px;top:43%;color:#aaa}time,time span,weather34card__count-text--bigsa{font-weight:400}.weather34card__count-text--bigsun span{font-size:15px;margin-left:-55px;position:absolute;width:120px;border:0;padding:0;margin-top:56%}
.date,.weather34card__count-text--bigs,.weather34card__stuff-container,weather34card__count-text--bigsa{font-size:12px;font-family:Arial,Helvetica,sans-serif;text-align:center;color:#aaa}
.date,.weather34card__count-text--bigs{font-weight:400;line-height:15px}
.weather34card__count-text--big{position:absolute;left:-15%;margin-top:-25px;font-size:0.8em}

.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;background:rgba(37,41,45,0);border:0 solid rgba(156,156,156,.1);-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px}.weather34browser-footer,.weather34browser-header{flex-basis:auto;border-bottom:0;display:flex;height:35px}orange,time span{color:#ff8841}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.provided,a{font-size:10px;bottom:5px;position:fixed;width:600px;display:inline}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,.5),transparent 70%)}blue{color:#01a4b4}green{color:#9aba2f}red{color:#db7660}red6{color:#d65b4a}value{color:#fff}yellow{color:#CC0}purple{color:#916392}time{color:#aaa;font-family:Arial,Helvetica,sans-serif}time span{font-family:Arial,Helvetica,sans-serif}.provided{color:#aaa;text-decoration:none;margin-left:10px}.weather34mooncontainer{width:0;height:0;font-size:0;background:0;margin-left:-55px;position:absolute;margin-top:-55px}.weather34card__count-text--big{font-size:12px;font-weight:100;font-family:weathertext2,sans-serif;position:absolute;top:180px;margin-left:85px;width:200px;text-align:center;z-index:20}mydate{font-size:12px}sup{font-size:10px}sup{color:#aaa}mydate{color:#aaa;margin-left:2%}sunset{color:#ff8841}
a{color:#aaa;text-decoration:none}
.weather34darkbrowser{font-family:Arial, Helvetica, sans-serif;position:relative;background:rgba(56, 56, 60, 1.000);width:105%;max-height:25px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat;margin-bottom:10px}

.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:12px;position:absolute;left:0;right:0;top:0;padding:5px 5px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:23px;box-sizing:border-box;font-family:weathertext2,Arial,Helvetica,system;}
a{color:#aaa;text-decoration:none}
body{color-adjust:[exact]}
.daylightvalue{color:#f8f8f8;margin-left:7px;margin-top:0px;}span1{position:absolute;color:#fff;font-size:12px;left:-15px;line-height:15px;background:#44a6b5;-webkit-border-radius:2px;border-radius:2px;margin-top:70px;width:110px;}
moonposition{margin-left:55px;margin-top:0px;position:absolute}
.advisory{position:absolute;font-size:1rem;line-height:10px;display:inline;width:550px;margin-top:30px;left:120px;} 
.advisoryguide{position:absolute;font-size:1.2rem;line-height:1.3rem;display:inline;width:550px;margin-top:5px;left:3px;text-align:left;} 

</style>
</head>
<body>
<div class="weather34darkbrowser" url="Moon Phase | Dates & Times Information"></div>
 <section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container"><mydate> Moonphase <?php echo date('l jS F');?><br></mydate>
            <div class="weather34card_weather34-wrapper">
            
          <moonposition>
              <?php 
//moon phases weather34 svg large module
$newmoonsvg1='<svg id="weather34 new moon" width="130px" height="130px" viewBox="0 0 800 500" version="1.1"><path fill="#777" opacity="1.00" d=" M 430.70 40.17 C 443.56 39.89 456.44 39.88 469.30 40.18 C 472.89 41.71 476.95 40.48 480.63 41.76 C 506.46 44.68 531.95 51.64 555.49 62.71 C 568.26 67.89 579.99 75.22 591.64 82.51 C 602.48 90.13 613.32 97.91 622.78 107.23 C 635.26 117.83 645.73 130.56 655.75 143.46 C 680.56 176.80 697.17 216.28 703.30 257.41 C 704.61 266.22 705.43 275.10 706.01 283.98 C 705.69 295.29 706.75 306.68 705.13 317.91 C 704.98 323.52 704.22 329.08 703.29 334.60 C 699.72 357.31 693.53 379.73 683.72 400.56 C 673.81 423.77 659.51 444.92 643.24 464.13 C 639.34 467.95 635.92 472.22 632.12 476.14 C 615.03 493.19 595.67 508.01 574.56 519.74 C 545.00 536.61 511.83 546.83 478.07 550.75 C 471.35 550.99 464.71 552.34 457.96 552.01 C 445.07 552.04 432.11 552.34 419.36 550.22 C 408.21 549.46 397.30 546.75 386.44 544.25 C 350.86 535.19 317.41 518.17 288.92 495.06 C 252.21 465.47 224.00 425.48 208.27 381.04 C 199.94 357.24 195.11 332.22 193.98 307.05 C 194.29 296.13 193.28 285.13 194.83 274.27 C 195.14 268.62 195.91 263.00 196.71 257.40 C 200.06 235.04 206.43 213.13 215.70 192.51 C 227.16 165.87 243.89 141.72 263.46 120.41 C 286.81 96.16 314.45 75.67 345.44 62.29 C 362.87 54.12 381.43 48.29 400.34 44.73 C 406.63 43.44 412.95 42.21 419.36 41.76 C 423.04 40.47 427.11 41.71 430.70 40.17 Z" /></svg>';

$fullmoonsvg1='<svg id="weather34 full moon" width="130px" height="130px" viewBox="0 0 800 500" version="1.1"><path fill="#e6e8ef" opacity="1.00" d=" M 430.70 40.17 C 443.56 39.89 456.44 39.88 469.30 40.18 C 472.89 41.71 476.95 40.48 480.63 41.76 C 506.46 44.68 531.95 51.64 555.49 62.71 C 568.26 67.89 579.99 75.22 591.64 82.51 C 602.48 90.13 613.32 97.91 622.78 107.23 C 635.26 117.83 645.73 130.56 655.75 143.46 C 680.56 176.80 697.17 216.28 703.30 257.41 C 704.61 266.22 705.43 275.10 706.01 283.98 C 705.69 295.29 706.75 306.68 705.13 317.91 C 704.98 323.52 704.22 329.08 703.29 334.60 C 699.72 357.31 693.53 379.73 683.72 400.56 C 673.81 423.77 659.51 444.92 643.24 464.13 C 639.34 467.95 635.92 472.22 632.12 476.14 C 615.03 493.19 595.67 508.01 574.56 519.74 C 545.00 536.61 511.83 546.83 478.07 550.75 C 471.35 550.99 464.71 552.34 457.96 552.01 C 445.07 552.04 432.11 552.34 419.36 550.22 C 408.21 549.46 397.30 546.75 386.44 544.25 C 350.86 535.19 317.41 518.17 288.92 495.06 C 252.21 465.47 224.00 425.48 208.27 381.04 C 199.94 357.24 195.11 332.22 193.98 307.05 C 194.29 296.13 193.28 285.13 194.83 274.27 C 195.14 268.62 195.91 263.00 196.71 257.40 C 200.06 235.04 206.43 213.13 215.70 192.51 C 227.16 165.87 243.89 141.72 263.46 120.41 C 286.81 96.16 314.45 75.67 345.44 62.29 C 362.87 54.12 381.43 48.29 400.34 44.73 C 406.63 43.44 412.95 42.21 419.36 41.76 C 423.04 40.47 427.11 41.71 430.70 40.17 Z" /></svg>';
$waxingcrescentsvg1='<svg id="weather34 waxing crescent1" width="130px" height="130px" viewBox="0 0 800 500" version="1.1">
<path fill="#c0c0c0" stroke=#38383c stroke-linecap=round stroke-linejoin=round stroke-width=2% opacity="1.00" d=" M 424.08 41.80 C 428.14 41.76 431.91 39.87 435.98 39.96 C 445.29 40.02 454.61 40.02 463.93 39.96 C 467.71 39.78 471.18 41.59 474.94 41.70 C 518.62 45.91 561.12 61.76 596.91 87.14 C 620.55 103.77 641.34 124.39 658.07 147.97 C 682.90 182.63 698.85 223.63 703.76 266.00 C 710.67 322.96 697.52 382.16 666.91 430.72 C 647.01 462.88 619.81 490.43 588.01 510.88 C 553.07 533.50 512.47 547.30 470.98 550.65 C 420.69 554.95 369.24 543.70 325.29 518.91 C 287.81 497.83 255.70 467.29 233.06 430.70 C 201.97 381.32 188.89 320.95 196.61 263.11 C 203.54 207.81 229.68 155.35 268.95 115.90 C 310.14 74.41 365.82 47.49 424.08 41.80 M 422.58 46.82 C 405.12 48.65 387.88 52.50 371.23 58.07 C 329.67 71.99 292.92 98.29 263.94 130.93 C 248.03 148.68 234.53 168.64 224.32 190.19 C 212.03 216.12 204.84 244.37 202.51 272.94 C 200.27 300.32 201.85 328.11 208.07 354.91 C 213.67 379.98 223.84 403.92 237.25 425.80 C 259.46 461.00 289.85 491.14 325.46 512.73 C 363.20 535.64 407.46 546.90 451.49 546.84 C 480.17 547.51 508.68 537.75 531.58 520.62 C 546.03 509.93 558.74 496.92 569.38 482.45 C 579.16 469.81 587.74 456.23 594.91 441.96 C 599.50 434.14 602.43 425.53 606.18 417.31 C 618.98 384.38 625.60 349.22 627.06 313.96 C 628.18 289.77 627.12 265.47 623.62 241.50 C 618.20 204.17 606.07 167.67 586.73 135.20 C 581.62 127.34 576.99 119.14 571.01 111.88 C 559.38 95.80 545.44 81.28 529.23 69.76 C 513.14 58.27 494.54 50.07 474.95 46.97 C 457.64 43.99 439.96 45.06 422.58 46.82 Z" />
<path fill="#38383c" opacity="1.00" d=" M 422.58 46.82 C 439.96 45.06 457.64 43.99 474.95 46.97 C 494.54 50.07 513.14 58.27 529.23 69.76 C 545.44 81.28 559.38 95.80 571.01 111.88 C 576.99 119.14 581.62 127.34 586.73 135.20 C 606.07 167.67 618.20 204.17 623.62 241.50 C 627.12 265.47 628.18 289.77 627.06 313.96 C 625.60 349.22 618.98 384.38 606.18 417.31 C 602.43 425.53 599.50 434.14 594.91 441.96 C 587.74 456.23 579.16 469.81 569.38 482.45 C 558.74 496.92 546.03 509.93 531.58 520.62 C 508.68 537.75 480.17 547.51 451.49 546.84 C 407.46 546.90 363.20 535.64 325.46 512.73 C 289.85 491.14 259.46 461.00 237.25 425.80 C 223.84 403.92 213.67 379.98 208.07 354.91 C 201.85 328.11 200.27 300.32 202.51 272.94 C 204.84 244.37 212.03 216.12 224.32 190.19 C 234.53 168.64 248.03 148.68 263.94 130.93 C 292.92 98.29 329.67 71.99 371.23 58.07 C 387.88 52.50 405.12 48.65 422.58 46.82 Z" />
</svg>';
$firstquartersvg1='<svg id="weather34 first quarter" width="130px" height="130px" viewBox="0 0 800 500" version="1.1"><path fill="#38383c" opacity="1.00" d=" M 430.59 40.29 C 431.93 39.66 433.56 40.11 435.03 39.98 C 446.02 40.04 457.01 39.98 468.00 40.00 C 469.49 39.76 470.45 41.37 471.94 41.30 C 513.58 44.86 554.29 58.86 589.27 81.77 C 618.49 100.79 643.75 125.86 663.03 154.91 C 685.45 188.55 699.72 227.63 704.05 267.83 C 709.22 313.53 701.68 360.63 682.36 402.38 C 653.51 465.83 597.56 516.37 531.35 538.27 C 488.54 552.86 441.77 555.52 397.53 546.18 C 358.55 538.04 321.57 520.55 290.54 495.60 C 258.83 470.34 233.31 437.36 216.70 400.37 C 195.40 353.19 189.11 299.45 198.80 248.61 C 206.20 209.14 223.17 171.51 247.82 139.82 C 273.61 106.39 307.81 79.48 346.41 62.35 C 371.92 50.94 399.34 43.90 427.17 41.39 C 428.41 41.42 429.56 40.99 430.59 40.29 M 446.93 45.06 C 446.94 212.33 446.95 379.61 446.93 546.88 C 464.79 546.84 482.67 545.26 500.17 541.58 C 537.70 534.06 573.05 516.85 602.73 492.77 C 633.27 467.86 659.23 436.78 675.82 400.87 C 695.62 358.65 701.51 310.70 696.27 264.59 C 691.80 223.23 676.02 183.22 651.14 149.88 C 628.40 119.41 599.58 93.22 566.26 74.75 C 530.01 54.47 488.31 45.09 446.93 45.06 Z" />
<path fill="#c0c0c0" stroke=#38383c stroke-linecap=round stroke-linejoin=round stroke-width=2% opacity="1.00" d=" M 446.93 45.06 C 488.31 45.09 530.01 54.47 566.26 74.75 C 599.58 93.22 628.40 119.41 651.14 149.88 C 676.02 183.22 691.80 223.23 696.27 264.59 C 701.51 310.70 695.62 358.65 675.82 400.87 C 659.23 436.78 633.27 467.86 602.73 492.77 C 573.05 516.85 537.70 534.06 500.17 541.58 C 482.67 545.26 464.79 546.84 446.93 546.88 C 446.95 379.61 446.94 212.33 446.93 45.06 Z" />
</svg>';
$waxinggibboussvg1='<svg id="weather34 waxing gibbous" width="130px" height="130px" viewBox="0 0 900 600" version="1.1">
<path fill="#38383c" opacity="1.00" d=" M 422.53 41.85 C 425.88 41.58 429.30 40.64 432.63 41.50 C 435.43 42.36 438.15 40.65 440.99 40.93 C 449.00 40.98 457.15 40.17 465.05 41.76 C 466.74 41.88 468.33 41.06 470.02 41.13 C 512.58 44.45 554.23 58.69 589.88 82.16 C 617.25 100.13 641.14 123.35 659.84 150.22 C 684.09 184.91 699.52 225.76 704.06 267.86 C 708.37 305.94 703.82 344.96 691.04 381.09 C 678.52 416.48 658.03 449.02 631.61 475.68 C 606.44 501.12 575.93 521.30 542.55 534.25 C 503.17 549.65 459.95 554.94 418.01 549.63 C 379.66 544.80 342.44 531.12 310.16 509.85 C 276.31 487.71 247.87 457.43 227.85 422.29 C 204.12 380.89 192.44 332.67 194.62 284.99 C 196.72 232.41 215.78 180.68 248.25 139.28 C 268.92 112.57 295.03 90.12 324.39 73.43 C 354.50 56.37 388.11 45.54 422.53 41.85 M 440.56 45.75 C 433.02 47.03 425.94 50.34 419.75 54.79 C 404.53 66.38 394.27 83.00 385.75 99.84 C 367.71 137.12 357.53 177.79 352.27 218.75 C 347.16 258.95 346.53 299.65 349.03 340.08 C 352.52 390.87 362.24 441.90 383.86 488.28 C 391.87 504.88 401.28 521.44 415.42 533.61 C 423.97 541.48 435.26 546.77 447.01 546.82 C 458.72 546.84 470.44 546.35 482.05 544.73 C 523.60 539.70 563.63 523.27 596.83 497.80 C 628.77 473.29 656.02 442.11 673.82 405.86 C 693.66 366.19 700.88 320.95 697.78 276.90 C 696.48 255.64 692.28 234.58 685.51 214.39 C 672.37 175.38 648.31 140.57 618.34 112.57 C 589.16 84.96 553.49 63.80 514.50 53.64 C 493.18 47.78 471.05 45.33 448.98 45.09 C 446.16 45.09 443.33 45.24 440.56 45.75 Z" /><path fill="#c0c0c0" stroke=#38383c stroke-linecap=round stroke-linejoin=round stroke-width=2% opacity="1.00" d=" M 440.56 45.75 C 443.33 45.24 446.16 45.09 448.98 45.09 C 471.05 45.33 493.18 47.78 514.50 53.64 C 553.49 63.80 589.16 84.96 618.34 112.57 C 648.31 140.57 672.37 175.38 685.51 214.39 C 692.28 234.58 696.48 255.64 697.78 276.90 C 700.88 320.95 693.66 366.19 673.82 405.86 C 656.02 442.11 628.77 473.29 596.83 497.80 C 563.63 523.27 523.60 539.70 482.05 544.73 C 470.44 546.35 458.72 546.84 447.01 546.82 C 435.26 546.77 423.97 541.48 415.42 533.61 C 401.28 521.44 391.87 504.88 383.86 488.28 C 362.24 441.90 352.52 390.87 349.03 340.08 C 346.53 299.65 347.16 258.95 352.27 218.75 C 357.53 177.79 367.71 137.12 385.75 99.84 C 394.27 83.00 404.53 66.38 419.75 54.79 C 425.94 50.34 433.02 47.03 440.56 45.75 Z" /></svg>';
$waninggibboussvg1='<svg id="weather34 waning gibbous" width="130px" height="130px" viewBox="0 0 800 500" version="1.1"><path fill="#38383c" opacity="1.00" d=" M 444.57 40.89 C 451.70 40.77 458.92 40.55 465.94 41.77 C 470.56 40.42 475.32 41.74 479.98 42.16 C 513.55 46.02 546.25 56.82 575.65 73.45 C 609.15 92.47 638.33 119.06 660.21 150.76 C 683.15 183.74 698.11 222.26 703.36 262.09 C 709.24 305.33 703.68 350.04 687.47 390.55 C 672.98 426.88 649.96 459.75 620.91 485.92 C 592.35 511.61 558.01 530.91 521.07 541.53 C 478.96 553.82 433.63 554.94 390.98 544.69 C 322.95 528.89 262.62 483.50 228.17 422.81 C 192.27 361.07 184.47 283.89 207.20 216.20 C 218.10 182.75 236.21 151.73 259.69 125.56 C 288.50 93.37 325.54 68.51 366.42 54.48 C 386.92 47.23 408.41 42.88 430.06 41.12 C 434.90 42.54 439.65 40.42 444.57 40.89 M 445.21 45.21 C 417.96 45.89 390.71 50.57 365.12 60.07 C 329.10 73.26 296.94 95.84 270.60 123.55 C 247.38 147.71 228.57 176.32 216.85 207.78 C 205.39 238.42 200.65 271.37 201.68 304.00 C 202.33 331.03 207.11 358.06 216.53 383.44 C 229.45 418.82 251.38 450.55 278.49 476.55 C 294.23 491.82 311.76 505.36 330.94 516.07 C 368.15 537.36 411.31 547.44 454.05 546.78 C 460.55 546.60 466.95 544.82 472.72 541.87 C 487.73 533.95 498.25 519.98 506.99 505.82 C 519.01 484.62 527.96 461.79 534.62 438.37 C 545.33 400.89 550.28 361.98 551.87 323.09 C 553.31 283.25 551.85 243.20 545.57 203.79 C 540.16 169.43 530.84 135.54 516.22 103.91 C 507.91 86.86 498.20 69.84 483.51 57.45 C 473.18 48.18 458.98 43.83 445.21 45.21 Z" /><path fill="#c0c0c0" stroke=#38383c stroke-linecap=round stroke-linejoin=round stroke-width=2% opacity="1.00" d=" M 445.21 45.21 C 458.98 43.83 473.18 48.18 483.51 57.45 C 498.20 69.84 507.91 86.86 516.22 103.91 C 530.84 135.54 540.16 169.43 545.57 203.79 C 551.85 243.20 553.31 283.25 551.87 323.09 C 550.28 361.98 545.33 400.89 534.62 438.37 C 527.96 461.79 519.01 484.62 506.99 505.82 C 498.25 519.98 487.73 533.95 472.72 541.87 C 466.95 544.82 460.55 546.60 454.05 546.78 C 411.31 547.44 368.15 537.36 330.94 516.07 C 311.76 505.36 294.23 491.82 278.49 476.55 C 251.38 450.55 229.45 418.82 216.53 383.44 C 207.11 358.06 202.33 331.03 201.68 304.00 C 200.65 271.37 205.39 238.42 216.85 207.78 C 228.57 176.32 247.38 147.71 270.60 123.55 C 296.94 95.84 329.10 73.26 365.12 60.07 C 390.71 50.57 417.96 45.89 445.21 45.21 Z" />
</svg>';
$lastquartersvg1='<svg id="weather34 last quarter" width="130px" height="130px" viewBox="0 0 800 500" version="1.1">
<path fill="#38383c" opacity="1.00" d=" M 430.59 40.30 C 431.92 39.66 433.53 40.11 434.98 39.98 C 446.00 40.04 457.02 39.98 468.04 40.00 C 469.51 39.82 470.50 41.35 471.97 41.30 C 512.17 44.76 551.49 57.90 585.62 79.42 C 611.09 95.46 633.78 115.93 652.15 139.78 C 678.06 173.07 695.46 212.92 702.25 254.55 C 709.17 296.52 705.43 340.21 691.28 380.34 C 678.47 417.13 656.92 450.81 629.18 478.12 C 600.90 505.94 566.14 527.18 528.35 539.30 C 484.19 553.63 436.06 555.54 390.91 544.68 C 351.79 535.47 315.03 516.67 284.47 490.60 C 257.70 467.84 235.67 439.51 220.25 407.94 C 202.34 371.43 193.40 330.54 194.47 289.90 C 195.48 240.41 211.49 191.38 239.78 150.77 C 256.34 126.84 277.00 105.74 300.62 88.72 C 337.48 61.94 381.69 45.42 427.07 41.39 C 428.34 41.41 429.52 40.97 430.59 40.30 M 373.58 57.39 C 334.08 70.22 298.72 94.23 270.35 124.36 C 240.34 155.56 218.08 194.53 208.49 236.88 C 202.38 263.07 200.73 290.23 202.73 317.03 C 205.61 359.39 219.91 400.96 244.20 435.83 C 267.54 469.16 298.16 497.65 333.84 517.36 C 370.09 537.49 411.73 547.02 453.07 546.88 C 453.05 379.61 453.06 212.33 453.07 45.06 C 426.16 45.22 399.17 48.91 373.58 57.39 Z" />
<path fill="#c0c0c0" stroke=#38383c stroke-linecap=round stroke-linejoin=round stroke-width=2% opacity="1.00" d=" M 373.58 57.39 C 399.17 48.91 426.16 45.22 453.07 45.06 C 453.06 212.33 453.05 379.61 453.07 546.88 C 411.73 547.02 370.09 537.49 333.84 517.36 C 298.16 497.65 267.54 469.16 244.20 435.83 C 219.91 400.96 205.61 359.39 202.73 317.03 C 200.73 290.23 202.38 263.07 208.49 236.88 C 218.08 194.53 240.34 155.56 270.35 124.36 C 298.72 94.23 334.08 70.22 373.58 57.39 Z" />
</svg>';	
$waningcrescentsvg1='<svg id="weather34 waning crescent" width="130px" height="130px" viewBox="0 0 800 500" version="1.1">
<path fill="#c0c0c0" stroke=#38383c stroke-linecap=round stroke-linejoin=round stroke-width=2% opacity="1.00" d=" M 426.06 41.59 C 429.42 41.33 432.57 39.78 435.99 39.96 C 445.30 40.02 454.61 40.02 463.93 39.96 C 467.36 39.76 470.54 41.32 473.93 41.59 C 501.79 44.26 529.29 51.35 554.73 63.09 C 589.20 78.43 620.03 101.84 644.49 130.53 C 671.45 162.16 690.64 200.40 699.54 241.02 C 713.98 305.29 702.10 375.00 666.93 430.72 C 646.76 463.26 619.14 491.10 586.83 511.63 C 550.77 534.70 508.77 548.42 466.04 551.01 C 422.30 553.86 377.85 545.07 338.47 525.80 C 295.35 504.83 258.32 471.52 233.09 430.74 C 198.17 375.43 186.18 306.32 200.15 242.44 C 206.32 213.75 217.47 186.10 233.09 161.25 C 260.42 117.10 301.58 81.68 349.31 61.24 C 373.64 50.69 399.66 44.08 426.06 41.59 M 434.45 45.73 C 415.68 47.37 397.40 53.43 381.18 62.96 C 361.79 74.58 345.02 90.37 331.57 108.50 C 314.68 129.97 301.59 154.29 291.91 179.80 C 288.88 189.50 285.07 198.97 282.97 208.93 C 277.45 229.18 274.93 250.08 273.17 270.95 C 272.35 290.62 272.02 310.37 274.05 329.97 C 277.68 375.12 290.72 419.85 314.32 458.66 C 328.39 481.45 345.13 503.11 366.68 519.31 C 390.81 538.01 421.47 548.24 452.05 546.77 C 494.66 546.35 537.36 535.13 573.95 513.08 C 606.55 493.50 634.70 466.63 656.40 435.44 C 680.75 400.37 695.00 358.55 697.70 315.97 C 700.97 271.95 693.78 226.71 674.13 186.98 C 656.58 151.35 630.07 120.52 598.91 96.07 C 564.48 69.06 522.54 51.76 479.02 47.00 C 464.24 45.41 449.29 44.39 434.45 45.73 Z" /><path fill="#38383c" opacity="1.00" d=" M 434.45 45.73 C 449.29 44.39 464.24 45.41 479.02 47.00 C 522.54 51.76 564.48 69.06 598.91 96.07 C 630.07 120.52 656.58 151.35 674.13 186.98 C 693.78 226.71 700.97 271.95 697.70 315.97 C 695.00 358.55 680.75 400.37 656.40 435.44 C 634.70 466.63 606.55 493.50 573.95 513.08 C 537.36 535.13 494.66 546.35 452.05 546.77 C 421.47 548.24 390.81 538.01 366.68 519.31 C 345.13 503.11 328.39 481.45 314.32 458.66 C 290.72 419.85 277.68 375.12 274.05 329.97 C 272.02 310.37 272.35 290.62 273.17 270.95 C 274.93 250.08 277.45 229.18 282.97 208.93 C 285.07 198.97 288.88 189.50 291.91 179.80 C 301.59 154.29 314.68 129.97 331.57 108.50 C 345.02 90.37 361.79 74.58 381.18 62.96 C 397.40 53.43 415.68 47.37 434.45 45.73 Z" /></svg>';
 //weather34 convert meteobridge lunar segment	 with large svg 
if ($meteobridgeapi[153]==0){ echo $newmoonsvg1;}if ($meteobridgeapi[153]==1){ echo $waxingcrescentsvg1;}if ($meteobridgeapi[153]==2){ echo $firstquartersvg1;}if ($meteobridgeapi[153]==3){ echo $waxinggibboussvg1;}if ($meteobridgeapi[153]==4){ echo $fullmoonsvg1;}if ($meteobridgeapi[153]==5){ echo $waninggibboussvg1;}if ($meteobridgeapi[153]==6){ echo $lastquartersvg1;}if ($meteobridgeapi[153]==7){ echo $waningcrescentsvg1;}?></moonposition>
             
              <span class="weather34card__count-text--big"> 
<?php echo " ";{$day = date('l jS F Y');if($day===date("l jS F Y",strtotime('2019-7-2'))){echo 'Solar <orange>Eclipse</orange>';}else if($day===date("l jS F Y",strtotime('2019-7-16'))){echo 'Lunar <orange>Eclipse</orange>';}else if($day===date("l jS F Y",strtotime('2019-7-17'))){echo 'Lunar <orange>Eclipse</orange>';}else if($day===date("l jS F Y",strtotime('2019-12-26'))){echo 'Solar <orange>Eclipse</orange>';}		
// weather34 moonphase no scraping its calculated from the livedata !
	else echo "<aqivalue1>".$weather['moonphase']." </aqivalue1>";}?>             
<br>
<?php echo" Luminance <orange>" .$weather['luminance']."</orange>%";?>            
 
            </div></div></div>
         <div class="weather34card__count-container" >
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--big"> 
	</div>
        </div></div></div></div></div>            
            
 <div class="weather34card weather34card--earthquake2" >
 <div class="weather34card_weather34-container" >  
 <div class="weather34card_weather34-wrapper" ><span class="weather34card__count-text--bigsa">            
<?php echo $info;?> Moon Rise/Set <span>Information</span><br>
<svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="rgba(255, 136, 65, 1.00)" stroke="rgba(255, 136, 65, 1.00)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> Moonrise:
<span style="color:#aaa;font-weight:normal;">
<?php echo $weather['moonrise']," ";?>
<svg id="i-chevron-top" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#ff8841" stroke-linecap="round" stroke-linejoin="round" stroke-width="10%"><path d="M30 20 L16 8 2 20" /></svg>
</span><br>
<svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="#D46842" stroke="#D46842" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%"><circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> Moonset: <span style="color:#aaa;font-weight:normal;">
<?php echo $weather['moonset']," ";?>
<svg id="i-chevron-bottom" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="#ff8841" stroke-linecap="round" stroke-linejoin="round" stroke-width="10%"><path d="M30 12 L16 24 2 12" /></svg>
</span><br>
<?php  // full/new moon for homeweather station  // ?>
<span style="color:#aaa;"> 
<svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="rgba(255, 136, 65, 1.00)" stroke="rgba(255, 136, 65, 1.00)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg>
Next Full Moon:<span style="color:#aaa;"> <?php  // homeweatherstation fullmoon info output 18th Aug
$now1 =time();$moon1 = new MoonPhase();
echo "";
if ($now1 < $moon1->full_moon()) 
{echo date('D jS-M-Y', $moon1->full_moon() );}
else echo date('D jS-M-Y', $moon1->next_full_moon() );
?></span><br>
<span style="color:#aaa;"> 
<svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="#777" stroke="#777" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /> <path d="M6 6 L26 26" /></svg>
Next New Moon:<?php $moon=new MoonPhase();$nextnewmoon=date('D jS-M-Y',$moon->next_new_moon());echo $nextnewmoon;?>
</span><br /><svg id="i-ban" viewBox="0 0 32 32" width="10" height="10" fill="rgba(154, 186, 47, 1.00)" stroke="rgba(154, 186, 47, 1.00)" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> 
<?php // homeweatherstation create an instance of the age of moon
$moon = new MoonPhase();$moonage =round($moon->age(),2);echo "Current Moon cycle is <span style='color:#ff8841'>", round($moonage,0)," days old";?>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                <span class="weather34card__count-text--bigs"> 
	<img src='img/moonphasesweather34svg.svg' width='180px' alt="weather34 moonphases svg" title="weather34 moonphases svg "style='border-radius:4px;border:solid 1px #555;'>
	</div>
        </div>
         
           
       
</section>

<section class="weather34cards" >
   <div class="weather34card weather34card--earthquake1" style="width:600px;height:150px;">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--bigs"><div class="advisoryguide">
			Moon Facts: Did you Know?<br>
            <svg id="i-ban" viewBox="0 0 32 32" width="8" height="8" fill="#3b9cac" stroke="#3b9cac" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> The Moon was approximately formed 4.5 billion years ago.<br>
  <svg id="i-ban" viewBox="0 0 32 32" width="8" height="8" fill="#3b9cac" stroke="#3b9cac" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> High and Low tides are caused by the Moons gravitational pull.<br>
  <svg id="i-ban" viewBox="0 0 32 32" width="8" height="8" fill="#3b9cac" stroke="#3b9cac" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> The Moon orbits the Earth every 27.3 days approximately. <br>
  <svg id="i-ban" viewBox="0 0 32 32" width="8" height="8" fill="#3b9cac" stroke="#3b9cac" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> When the sunlight hits the moon's surface,temperatures can reach 260&deg;F (127&deg;C).<br>
<svg id="i-ban" viewBox="0 0 32 32" width="8" height="8" fill="#3b9cac" stroke="#3b9cac" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<circle cx="16" cy="16" r="14" /><path d="M6 6 L26 26" /></svg> When the sun goes down,temperatures can drop to minus -280&deg;F (-173&deg;C).<br>
			</span></div>
        </div></div>
        
</section>

<div class="provided">   
&nbsp;
<?php echo $info;?><a href="https://weather34.com" title="weather34.com" target="_blank"><?php echo $copyrightcredit;?></a></div>
</body>