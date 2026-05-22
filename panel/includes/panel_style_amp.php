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
    background: #ffcc99;
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
    border: 1px solid #03a9f4a8
  }

  thead {
    background-color: #ffc107;
    text-shadow: 1px 1px 2px #9a7400ab
  }

  thead th {
    padding: 8px 0;
    font-size: 20px;
    font-weight: 700;
  }

  tbody td {
    padding: 5px 0;
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
    background: #ffcc99;
    padding: 0 10px;
    display: block;
    color: #fff8f8;
    margin-bottom: 5px;
    letter-spacing: 1px;
    font-weight: 700;
    border: 3px solid #ff0016;
    border-radius: .75em;
    transform-style: preserve-3d;
    transition: transform 150ms cubic-bezier(0, 0, .58, 1), background 150ms cubic-bezier(0, 0, .58, 1);
  }

  .logo a {
    display: block;
    padding: 10px 0;
  }

  .logo a img {
    display: block;
    padding: 0;
    margin: 0 auto;
  }

  .logo amp-img {
    width: 220px;
    height: auto;
    display: block;
    padding: 0;
    margin: 0 auto;
  }

  @media screen and (max-width: 400px) {
    .logo a img {
      height: 60px;
      width: auto;
      max-width: 100%;
    }
  }

  @media screen and (max-width: 300px) {
    .logo a img {
      height: 40px;
      width: auto;
      max-width: 100%;
    }
  }

  .button2 {
    background-color: #a0d5ff;
    color: #220c82;
    padding: 10px 30px;
    font-size: 14px;
    margin: 10px 0px 20px;
    border: 2px solid #0000005c;
    font-weight: 800;
    text-decoration: none;
    text-shadow: 1px 1px #00bcd4;
    box-shadow: 0 8px 10px 0 rgba(0, 0, 0, .2), 0 6px 8px 0 rgba(0, 0, 0, .19);
    display: inline-block;
    transition: all .3s;
    border-radius: 5px;
  }



  /*================== Main Body Content Styles ==================*/
  .panel-container {
    width: 100%;
    margin: 20px 0 30px;
  }

  .panel-content {
    border: 1px solid #3f51b5;
    width: 70%;
    margin: 0 auto;
  }

  @media only screen and (max-width:770px) {
    .panel-content {
      width: 99%
    }
  }

  .panel-content-heading {
    background: #3f51b5;
  }

  .panel-content-heading h1 {
    margin: 0;
    padding: 5px;
    font-size: 22px;
    color: #ffffff;
    text-shadow: 0px 0px;
  }

  .panel-content-chart {
    width: 100%;
    text-align: center;
  }

  .r {
    color: red
  }

  thead tr th:nth-child(1) {
    width: 100px
  }

  tr td:nth-child(1) {
    font-size: 13px
  }

  tbody tr td:nth-child(2),
  tbody tr td:nth-child(5),
  tbody tr td:nth-child(8),
  tbody tr td:nth-child(11),
  tbody tr td:nth-child(14),
  tbody tr td:nth-child(17),
  tbody tr td:nth-child(20),
  tbody tr td:nth-child(23) {
    border-right-width: 0px;
    font-size: 13px
  }

  tbody tr td:nth-child(3),
  tbody tr td:nth-child(6),
  tbody tr td:nth-child(9),
  tbody tr td:nth-child(12),
  tbody tr td:nth-child(15),
  tbody tr td:nth-child(18),
  tbody tr td:nth-child(21),
  tbody tr td:nth-child(24),
  tbody tr td:nth-child(27) {
    border-left-width: 0px;
    border-right-width: 0px;
    font-size: 23px
  }

  tbody tr td:nth-child(4),
  tbody tr td:nth-child(7),
  tbody tr td:nth-child(10),
  tbody tr td:nth-child(13),
  tbody tr td:nth-child(16),
  tbody tr td:nth-child(19),
  tbody tr td:nth-child(22),
  tbody tr td:nth-child(25),
  tbody tr td:nth-child(28) {
    border-left-width: 0px;
    font-size: 13px
  }

  @media only screen and (max-width:770px) {
    tr td:nth-child(1) {
      font-size: 9px
    }

    tbody tr td:nth-child(3),
    tbody tr td:nth-child(6),
    tbody tr td:nth-child(9),
    tbody tr td:nth-child(12),
    tbody tr td:nth-child(15),
    tbody tr td:nth-child(18),
    tbody tr td:nth-child(21),
    tbody tr td:nth-child(24),
    tbody tr td:nth-child(27) {
      border-left-width: 0;
      border-right-width: 0;
      font-size: 16px
    }

    tbody tr td:nth-child(4),
    tbody tr td:nth-child(7),
    tbody tr td:nth-child(10),
    tbody tr td:nth-child(13),
    tbody tr td:nth-child(16),
    tbody tr td:nth-child(19),
    tbody tr td:nth-child(22),
    tbody tr td:nth-child(25),
    tbody tr td:nth-child(28) {
      border-left-width: 0;
      font-size: 11px
    }

    tbody tr td:nth-child(2),
    tbody tr td:nth-child(5),
    tbody tr td:nth-child(8),
    tbody tr td:nth-child(11),
    tbody tr td:nth-child(14),
    tbody tr td:nth-child(17),
    tbody tr td:nth-child(20),
    tbody tr td:nth-child(23) {
      border-right-width: 0;
      font-size: 11px
    }

    thead tr th:nth-child(1) {
      width: 55px
    }
  }

  @media only screen and (max-width:500px) {

    tbody tr td:nth-child(3),
    tbody tr td:nth-child(6),
    tbody tr td:nth-child(9),
    tbody tr td:nth-child(12),
    tbody tr td:nth-child(15),
    tbody tr td:nth-child(18),
    tbody tr td:nth-child(21),
    tbody tr td:nth-child(24),
    tbody tr td:nth-child(27) {
      font-size: 14px
    }

    tr td:nth-child(1),
    tbody tr td:nth-child(2),
    tbody tr td:nth-child(5),
    tbody tr td:nth-child(8),
    tbody tr td:nth-child(11),
    tbody tr td:nth-child(14),
    tbody tr td:nth-child(17),
    tbody tr td:nth-child(20),
    tbody tr td:nth-child(23),
    tbody tr td:nth-child(4),
    tbody tr td:nth-child(7),
    tbody tr td:nth-child(10),
    tbody tr td:nth-child(13),
    tbody tr td:nth-child(16),
    tbody tr td:nth-child(19),
    tbody tr td:nth-child(22),
    tbody tr td:nth-child(25),
    tbody tr td:nth-child(28) {
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
    background: #ff00a2;
    padding: 5px 10px;
    text-shadow: 1px 1px 2px #000;
    display: block;
    color: #fff8f8;
    margin-bottom: 3px;
    letter-spacing: 1px;
    font-weight: 700;
    border: 2px solid #fff;
    transform-style: preserve-3d;
    transition: transform 150ms cubic-bezier(0, 0, .58, 1), background 150ms cubic-bezier(0, 0, .58, 1);
    font-size: 18px;
    margin: 3px 0px;
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
    margin: 6px 2px;
    line-height: 1.4;
    font-size: 14px;
    padding: 4px 10px;
    color: #00094d;
    text-shadow: 1px 1px 2px #fff;
    box-shadow: 0 0 20px 0 rgb(0 0 0 / 40%);
    border: 1px solid black;
  }

  .chart-result div {
    font-size: 22px;
    color: #00094d;
    text-shadow: 1px 1px 2px #fff;
  }

  .chart-result span {
    color: #880e4f;
    text-shadow: 1px 1px 2px #ffe2c6;
    font-size: 21px;
  }

  .chart-result a {
    border: 1px solid #e6e6e6;
    background: #522f92;
    color: #fff;
    padding: 5px 7px;
    font-size: 12px;
    margin: 2px 0 -1px;
    display: inline-block;
    transition: all .3s;
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
    background-color: #a0d5ff;
    color: #220c82;
    padding: 10px 30px;
    font-size: 14px;
    margin: 20px 0px 10px;
    border: 2px solid #0000005c;
    font-weight: 800;
    text-decoration: none;
    text-shadow: 1px 1px #00bcd4;
    box-shadow: 0 8px 10px 0 rgba(0, 0, 0, .2), 0 6px 8px 0 rgba(0, 0, 0, .19);
    display: inline-block;
    transition: all .3s;
    border-radius: 5px;
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
    background-color: #ffffff;
    color: red;
    font-weight: bold;
    font-size: 25px;
    text-decoration: none;
    border: 4px groove purple;
    text-shadow: 1px 1px gold;
    margin: 8px 3px 3px;
    padding-bottom: 10px;
  }

  footer>div {
    border-bottom: 2px solid #b2ddff;
    padding: 10px 0;
    margin-bottom: 10px
  }

  footer>div a {
    text-decoration: none;
    line-height: 1.5;
    padding: 0 5px;
  }

  footer>div a:hover {
    text-decoration: none
  }

  footer .ftr-icon {
    text-decoration: none;
    font-size: 35px;
    text-transform: uppercase;
    color: #007bff;
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