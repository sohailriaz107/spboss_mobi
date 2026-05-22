<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "NewsArticle",
    "mainEntityOfPage": "https://spboss.mobi",
    "author": "spboss.mobi",
    "headline": "Open-source framework for publishing content",
    "datePublished": "2015-10-07T12:02:41Z",
    "dateModified": "<?php echo date("Y-m-d"); ?>T12:02:041Z",
    "image": [
      "logo.jpg"
    ],
    "publisher": {
      "@type": "Organization",
      "name": "DPBOSS",
      "logo": {
        "@type": "ImageObject",
        "url": "https://spboss.mobi/logo.png"
      }
    }
  }
</script>

<style amp-boilerplate>
  body {
    -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
    -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
    -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
    animation: -amp-start 8s steps(1, end) 0s 1 normal both
  }

  @-webkit-keyframes -amp-start {
    from {
      visibility: hidden
    }

    to {
      visibility: visible
    }
  }

  @-moz-keyframes -amp-start {
    from {
      visibility: hidden
    }

    to {
      visibility: visible
    }
  }

  @-ms-keyframes -amp-start {
    from {
      visibility: hidden
    }

    to {
      visibility: visible
    }
  }

  @-o-keyframes -amp-start {
    from {
      visibility: hidden
    }

    to {
      visibility: visible
    }
  }

  @keyframes -amp-start {
    from {
      visibility: hidden
    }

    to {
      visibility: visible
    }
  }
</style>

<noscript>
  <style amp-boilerplate>
    body {
      -webkit-animation: none;
      -moz-animation: none;
      -ms-animation: none;
      animation: none
    }
  </style>
</noscript>

<style amp-custom>
  /*================== General Styles ==================*/
  *,
  *::after,
  *::before {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  html {
    scroll-behavior: smooth;
  }

  body {
    font-family: Helvetica, sans-serif;
    font-weight: 700;
    text-align: center;
    padding: 0;
    background: white;
  }

  h1 {
    color: #fff8f8;
  }

  table {
    border-collapse: collapse
  }

  table,
  th,
  td {
    border: 1px solid #d7def5
  }

  thead {
    background-color: #1a237e;
    color: #fff;
    text-shadow: none
  }

  thead th {
    padding: 9px 4px;
    font-size: 18px;
    font-weight: 800;
  }

  tbody td {
    padding: 7px 4px;
    font-family: "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
  }

  .red-text {
    color: red;
  }

  .green-text {
    color: green;
  }

  .blue-text {
    color: blue;
  }

  .purple-text {
    color: purple;
  }

  /*================== Name Amp (Header) Styles ==================*/
  .logo {
    background: linear-gradient(135deg, #1a237e 0%, #283593 60%, #3949ab 100%);
    padding: 0 10px;
    display: block;
    color: #fff;
    margin-bottom: 8px;
    letter-spacing: 1px;
    font-weight: 700;
    border: 3px solid #7986cb;
    border-radius: .75em;
    transform-style: preserve-3d;
    transition: transform 150ms cubic-bezier(0, 0, .58, 1), background 150ms cubic-bezier(0, 0, .58, 1);
    box-shadow: 0 4px 15px rgba(26, 35, 126, 0.4);
  }

  .logo a {
    display: block;
    padding: 10px 0;
  }

  .logo a img {
    display: block;
    padding: 0;
    margin: 0 auto;
    max-width: 100%;
    height: auto;
  }

  .logo amp-img {
    width: 220px;
    height: auto;
    display: block;
    padding: 0;
    margin: 0 auto;
  }

  @media screen and (max-width: 300px) {
    .logo a img {
      height: 40px;
      width: auto;
    }
  }

  .button2 {
    background: linear-gradient(135deg, #b8860b 0%, #f0c040 50%, #d4a017 100%);
    color: #1a0a00;
    padding: 6px 18px;
    font-size: 12px;
    margin: 10px 0 20px;
    border: 1px solid rgba(255, 255, 255, .5);
    font-weight: 700;
    letter-spacing: .5px;
    text-decoration: none;
    text-shadow: none;
    box-shadow: 0 2px 8px rgba(184, 134, 11, .4);
    display: inline-block;
    transition: all .25s ease;
    border-radius: 20px;
  }



  /*================== Main Body Content Styles ==================*/
  .panel-container {
    width: 100%;
    margin: 12px 0 30px;
    padding: 0 6px;
  }

  .panel-content {
    border: 2px solid #0b8f5a;
    width: 100%;
    max-width: 980px;
    margin: 0 auto;
    border-radius: 14px;
    overflow: hidden;
    background: #ecfff5;
    box-shadow: 0 8px 22px rgba(0, 105, 68, 0.18);
  }

  .panel-content-heading {
    background: linear-gradient(135deg, #006b3f 0%, #00985f 58%, #16b978 100%);
    border-bottom: 2px solid #9df0c6;
  }

  .panel-content-heading h1 {
    margin: 0;
    padding: 10px 6px;
    font-size: 21px;
    color: #ffffff;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, .35);
    letter-spacing: .4px;
  }

  .panel-content-chart {
    width: 100%;
    text-align: center;
    border-collapse: separate;
    border-spacing: 3px;
    background: #dff8eb;
    box-shadow: none;
  }

  .panel-content-body {
    overflow-x: auto;
    background: linear-gradient(to bottom, #f5fff9 0%, #e6f8ef 100%);
    padding: 5px;
  }

  .panel-content-chart th,
  .panel-content-chart td {
    border: 1px solid #b6dcc8;
    border-radius: 6px;
    text-shadow: none;
  }

  .panel-content-chart thead th {
    background: linear-gradient(180deg, #0a8d57 0%, #087348 100%);
    color: #ffffff;
    border-color: #7ad7a7;
    padding: 10px 4px;
    font-size: 16px;
    letter-spacing: .3px;
  }

  .panel-content-chart tbody td {
    color: #102a3a;
    font-weight: 900;
    background: #ffffff;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, .8);
  }

  .panel-content-chart tbody td:nth-child(3n+1) {
    background: #fff9df;
  }

  .panel-content-chart tbody td:nth-child(3n+2) {
    background: #e6f5ff;
  }

  .panel-content-chart tbody td:nth-child(3n) {
    background: #eafff1;
  }

  .panel-content-chart tbody tr:nth-child(even) td {
    border-color: #a9d4bd;
  }

  .panel-content-chart tbody td:first-child {
    background: #f2ecff;
  }

  .r {
    color: red
  }

  .panel-content-chart thead tr th:nth-child(1) {
    width: 100px
  }

  .panel-content-chart tr td:nth-child(1) {
    font-size: 13px
  }

  .panel-content-chart tbody tr td:nth-child(2),
  .panel-content-chart tbody tr td:nth-child(5),
  .panel-content-chart tbody tr td:nth-child(8),
  .panel-content-chart tbody tr td:nth-child(11),
  .panel-content-chart tbody tr td:nth-child(14),
  .panel-content-chart tbody tr td:nth-child(17),
  .panel-content-chart tbody tr td:nth-child(20),
  .panel-content-chart tbody tr td:nth-child(23) {
    border-right-width: 0px;
    font-size: 13px
  }

  .panel-content-chart tbody tr td:nth-child(3),
  .panel-content-chart tbody tr td:nth-child(6),
  .panel-content-chart tbody tr td:nth-child(9),
  .panel-content-chart tbody tr td:nth-child(12),
  .panel-content-chart tbody tr td:nth-child(15),
  .panel-content-chart tbody tr td:nth-child(18),
  .panel-content-chart tbody tr td:nth-child(21),
  .panel-content-chart tbody tr td:nth-child(24),
  .panel-content-chart tbody tr td:nth-child(27) {
    border-left-width: 0px;
    border-right-width: 0px;
    font-size: 23px
  }

  .panel-content-chart tbody tr td:nth-child(4),
  .panel-content-chart tbody tr td:nth-child(7),
  .panel-content-chart tbody tr td:nth-child(10),
  .panel-content-chart tbody tr td:nth-child(13),
  .panel-content-chart tbody tr td:nth-child(16),
  .panel-content-chart tbody tr td:nth-child(19),
  .panel-content-chart tbody tr td:nth-child(22),
  .panel-content-chart tbody tr td:nth-child(25),
  .panel-content-chart tbody tr td:nth-child(28) {
    border-left-width: 0px;
    font-size: 13px
  }

  @media only screen and (max-width:770px) {
    .panel-content-chart tr td:nth-child(1) {
      font-size: 9px
    }

    .panel-content-chart tbody tr td:nth-child(3),
    .panel-content-chart tbody tr td:nth-child(6),
    .panel-content-chart tbody tr td:nth-child(9),
    .panel-content-chart tbody tr td:nth-child(12),
    .panel-content-chart tbody tr td:nth-child(15),
    .panel-content-chart tbody tr td:nth-child(18),
    .panel-content-chart tbody tr td:nth-child(21),
    .panel-content-chart tbody tr td:nth-child(24),
    .panel-content-chart tbody tr td:nth-child(27) {
      border-left-width: 0;
      border-right-width: 0;
      font-size: 16px
    }

    .panel-content-chart tbody tr td:nth-child(4),
    .panel-content-chart tbody tr td:nth-child(7),
    .panel-content-chart tbody tr td:nth-child(10),
    .panel-content-chart tbody tr td:nth-child(13),
    .panel-content-chart tbody tr td:nth-child(16),
    .panel-content-chart tbody tr td:nth-child(19),
    .panel-content-chart tbody tr td:nth-child(22),
    .panel-content-chart tbody tr td:nth-child(25),
    .panel-content-chart tbody tr td:nth-child(28) {
      border-left-width: 0;
      font-size: 11px
    }

    .panel-content-chart tbody tr td:nth-child(2),
    .panel-content-chart tbody tr td:nth-child(5),
    .panel-content-chart tbody tr td:nth-child(8),
    .panel-content-chart tbody tr td:nth-child(11),
    .panel-content-chart tbody tr td:nth-child(14),
    .panel-content-chart tbody tr td:nth-child(17),
    .panel-content-chart tbody tr td:nth-child(20),
    .panel-content-chart tbody tr td:nth-child(23) {
      border-right-width: 0;
      font-size: 11px
    }

    .panel-content-chart thead tr th:nth-child(1) {
      width: 55px
    }
  }

  @media only screen and (max-width:500px) {

    .panel-content-chart tbody tr td:nth-child(3),
    .panel-content-chart tbody tr td:nth-child(6),
    .panel-content-chart tbody tr td:nth-child(9),
    .panel-content-chart tbody tr td:nth-child(12),
    .panel-content-chart tbody tr td:nth-child(15),
    .panel-content-chart tbody tr td:nth-child(18),
    .panel-content-chart tbody tr td:nth-child(21),
    .panel-content-chart tbody tr td:nth-child(24),
    .panel-content-chart tbody tr td:nth-child(27) {
      font-size: 14px
    }

    .panel-content-chart tr td:nth-child(1),
    .panel-content-chart tbody tr td:nth-child(2),
    .panel-content-chart tbody tr td:nth-child(5),
    .panel-content-chart tbody tr td:nth-child(8),
    .panel-content-chart tbody tr td:nth-child(11),
    .panel-content-chart tbody tr td:nth-child(14),
    .panel-content-chart tbody tr td:nth-child(17),
    .panel-content-chart tbody tr td:nth-child(20),
    .panel-content-chart tbody tr td:nth-child(23),
    .panel-content-chart tbody tr td:nth-child(4),
    .panel-content-chart tbody tr td:nth-child(7),
    .panel-content-chart tbody tr td:nth-child(10),
    .panel-content-chart tbody tr td:nth-child(13),
    .panel-content-chart tbody tr td:nth-child(16),
    .panel-content-chart tbody tr td:nth-child(19),
    .panel-content-chart tbody tr td:nth-child(22),
    .panel-content-chart tbody tr td:nth-child(25),
    .panel-content-chart tbody tr td:nth-child(28) {
      font-size: 9px
    }

    th {
      font-size: 11px
    }
  }

  .css-11,
  .css-16,
  .css-22,
  .css-27,
  .css-33,
  .css-38,
  .css-44,
  .css-49,
  .css-50,
  .css-55,
  .css-61,
  .css-66,
  .css-72,
  .css-83,
  .css-88,
  .css-94,
  .css-99,
  .css-05,
  .css-00,
  .css-77,
  .css-star,
  .chart-11,
  .chart-22,
  .chart-33,
  .chart-44,
  .chart-55,
  .chart-66,
  .chart-77,
  .chart-88,
  .chart-99,
  .chart-00,
  .chat-05,
  .chat-50,
  .chat-16,
  .chat-61,
  .chat-27,
  .chat-72,
  .chat-38,
  .chat-83,
  .chat-49,
  .chat-94,
  .chart-05,
  .chart-50,
  .chart-16,
  .chart-61,
  .chart-27,
  .chart-72,
  .chart-38,
  .chart-83,
  .chart-49,
  .chart-94 {
    color: red
  }

  .chart-h1 {
    background: linear-gradient(135deg, #006b3f 0%, #00985f 58%, #16b978 100%);
    padding: 9px 12px;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, .45);
    display: block;
    color: #ffffff;
    margin-bottom: 0;
    letter-spacing: 1px;
    font-weight: 800;
    border: 2px solid #9df0c6;
    border-radius: 10px 10px 0 0;
    transform-style: preserve-3d;
    transition: transform 150ms cubic-bezier(0, 0, .58, 1), background 150ms cubic-bezier(0, 0, .58, 1);
    font-size: 18px;
    margin: 6px 2px 0;
  }

  .para3 {
    background: linear-gradient(187deg, #fc9 50%, #ffc387 50%);
    border: 2px solid #ff0016;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-style: outset;
    margin-bottom: 3px;
    line-height: 1.4;
    font-size: 14px;
    padding: 4px 10px;
    color: #00094d;
    text-shadow: 1px 1px 2px #fff;
    box-shadow: 0 0 20px 0 rgb(0 0 0 / 40%);
  }

  .para3 h2 {
    font-size: 14px;
    margin: 0px;
  }

  .para3 p {
    margin: 0;
    font-size: 12px;
    line-height: 14px;
  }

  .chart-result {
    margin: 0 2px 10px;
    line-height: 1.45;
    font-size: 14px;
    padding: 12px 10px 14px;
    color: #00094d;
    text-shadow: none;
    box-shadow: 0 6px 18px rgba(0, 105, 68, .16);
    border: 2px solid #9ddfc0;
    border-top: 0;
    border-radius: 0 0 10px 10px;
    background: linear-gradient(180deg, #f7fffb 0%, #e8fff2 100%);
  }

  .chart-result div {
    font-size: 21px;
    color: #083f32;
    text-shadow: none;
    font-weight: 900;
    letter-spacing: .3px;
  }

  .chart-result span {
    color: #b0003a;
    text-shadow: none;
    font-size: 21px;
    display: inline-block;
    margin: 2px 0 5px;
  }

  .chart-result a {
    background: linear-gradient(135deg, #b8860b 0%, #f0c040 50%, #d4a017 100%);
    border: 1px solid rgba(255, 255, 255, .5);
    color: #1a0a00;
    padding: 5px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .5px;
    margin: 3px 0 0;
    display: inline-block;
    transition: all .25s ease;
    box-shadow: 0 2px 8px rgba(184, 134, 11, .4);
    cursor: pointer;
    text-shadow: none;
    text-decoration: none;
  }

  .panel-footer-container {
    max-width: 100%;
    text-align: center;
    margin: 2px;
    border: 2px solid purple;
    background: white;
    padding: 10px;
  }

  .panel-footer-content {
    max-width: 80%;
    padding: 0 0 20px;
    margin: 0 auto;
  }

  .panel-footer-container h2.small-heading {
    font-size: 16px;
    font-weight: 600;
    color: red;
    text-shadow: 0px 0px 1px yellow;
    margin-bottom: 4px;
  }

  .panel-footer-container p {
    font-weight: 500;
    font-size: 12px;
    padding: 0px;
    margin: 0px;
  }

  .panel-footer-container h2.faq-heading {
    font-size: 16px;
    font-weight: 600;
    color: red;
    text-shadow: 0px 0px 1px yellow;
    margin-bottom: 12px;
  }

  .panel-footer-container h3.faq-title {
    font-size: 14px;
    font-weight: 600;
    background: no-repeat;
    color: black;
    text-shadow: none;
    letter-spacing: 1px;
    margin: 0 0 5px;
  }

  .panel-footer-container p.faq-ans {
    margin: 0 0 10px;
  }

  /* .ad-div11 {
    text-align: center;
    margin: 0 0 10px
  } */

  /*================== Shortcut Amp (Footer) Styles ==================*/

  .goTopBtn {
    background: linear-gradient(135deg, #b8860b 0%, #f0c040 50%, #d4a017 100%);
    color: #1a0a00;
    padding: 6px 18px;
    font-size: 12px;
    margin: 16px 0 10px;
    border: 1px solid rgba(255, 255, 255, .5);
    font-weight: 700;
    letter-spacing: .5px;
    text-decoration: none;
    text-shadow: none;
    box-shadow: 0 2px 8px rgba(184, 134, 11, .4);
    display: inline-block;
    transition: all .25s ease;
    border-radius: 20px;
  }

  .chart-list {
    border: 2px solid #eb008b;
    margin-bottom: 2px;
    width: 50%;
    margin: 10px auto;
    text-align: center;
    font-weight: 600
  }

  .chart-list.ab1 {
    border-color: #003c6c
  }

  .chart-list h4 {
    color: #fff;
    padding: 5px 10px 3px;
    font-size: 24px;
    border-top-left-radius: 7px;
    margin: 0
  }

  .chart-list.ab1 h4 {
    background-color: #024c88
  }

  .chart-list a {
    display: block;
    font-size: 22px;
    padding: 5px 7px 4px;
    text-decoration: none
  }

  .chart-list a:hover {
    text-decoration: none
  }

  .chart-list.ab1 a {
    border-bottom: 2px solid #024c88;
    color: #003c6c
  }

  .chart-list a:hover {
    background-color: #fff;
    text-decoration: underline
  }

  @media only screen and (max-width:500px) {
    .chart-list {
      width: 95%
    }
  }

  footer {
    background: #ffffff;
    color: #1a237e;
    font-weight: bold;
    font-size: 18px;
    text-decoration: none;
    border: 2px solid rgba(74, 107, 181, .45);
    border-radius: 10px;
    text-shadow: none;
    margin: 10px 3px 8px;
    padding: 12px 8px 14px;
    box-shadow: 0 2px 12px rgba(61, 90, 153, .25);
  }

  footer>div {
    border-bottom: 2px solid #e8eaf6;
    padding: 8px 0 12px;
    margin-bottom: 10px;
    line-height: 1.6;
  }

  footer>div a {
    text-decoration: none;
    line-height: 1.5;
    padding: 0 5px;
    font-size: 18px;
    font-weight: 800;
  }

  footer>div a:hover {
    text-decoration: none
  }

  footer .ftr-icon {
    text-decoration: none;
    font-size: 30px;
    text-transform: uppercase;
    color: #1a237e;
    letter-spacing: .5px;
    text-shadow: 1px 1px 0 rgba(255, 255, 255, .8);
  }

  @media only screen and (max-width:500px) {
    footer {
      font-size: 16px;
      padding: 10px 6px 12px;
    }

    footer>div a {
      font-size: 16px;
      line-height: 1.65;
    }

    footer .ftr-icon {
      font-size: 26px;
    }
  }

  .mp-btn {
    position: fixed;
    bottom: 9px;
    left: 5px;
    padding: 5px 8px;
    font-size: 15px;
    border: 1px solid #fff;
    text-decoration: none;
    background-color: #039;
    color: #fff;
  }

  /* .nd td:nth-child(2),
  .nd td:nth-child(4),
  .nd td:nth-child(5),
  .nd td:nth-child(7),
  .nd td:nth-child(8),
  .nd td:nth-child(10),
  .nd td:nth-child(11),
  .nd td:nth-child(13),
  .nd td:nth-child(14),
  .nd td:nth-child(16),
  .nd td:nth-child(17),
  .nd td:nth-child(19),
  .nd td:nth-child(20),
  .nd td:nth-child(22),
  .nd td:nth-child(23),
  .nd td:nth-child(25),
  .nd td:nth-child(26),
  .nd td:nth-child(28),
  .nd td:nth-child(29) {
    writing-mode: vertical-rl;
    text-orientation: upright;
  }*/

  /* .pn-chat-h2 {
    font-size: 18px;
    color: #00094d;
    text-shadow: 1px 1px 2px #fff;
    margin: 5px;
  }

  .pn-chart-p {
    font-size: 13px;
    font-weight: 400;
    margin: 0 0 10px;
    padding: 0 10px 0;
  }

  .chart-p-faq {
    font-size: 14px;
    outline: 4px #fff;
    outline-offset: -9px;
    border: 2px solid #5c3411;
    border-style: outset;
    border-radius: 0;
    padding: 0;
    width: 50%;
    margin: auto;
  }

  .p-faq-title {
    background: #5c3411;
    padding: 5px 10px;
    text-shadow: 1px 1px 2px #000;
    display: block;
    color: #fff;
    margin-bottom: 3px;
    letter-spacing: 1px;
    font-weight: 700;
    margin: 0 0 5px;
    font-size: 18px;
  }

  .p-faq-sub-title {
    cursor: pointer;
    color: #0013a5;
    text-shadow: 1px 1px 2px #fff;
    font-weight: 800;
    font-size: 15px;
  }

  .p-faq-p {
    color: #000;
    font-weight: 700;
    margin: 0;
    font-size: 12px;
    font-style: normal;
    padding: 0 10px 5px;
    opacity: .9;
  }

  @media only screen and (max-width:770px) {
    .chart-p-faq {
      width: 100%
    }
  } */
</style>
