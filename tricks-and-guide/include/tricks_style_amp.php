<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "NewsArticle",
    "author": "spboss.mobi",
    "headline": "Open-source framework for publishing content",
    "datePublished": "2015-10-07T12:02:41Z",
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
    transition: ease-in-out all .3s
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

  @media only screen and (max-width:500px) {
    body {
      padding-left: 5px;
      padding-right: 5px
    }

    .margin-inline {
      margin-inline: 0;
    }

    .margin-block {
      margin-block: 5px;
    }
  }

  a,
  a:hover {
    text-decoration: none;
    color: initial
  }

  h1 {
    color: #fff8f8;
  }

  table {
    border-collapse: collapse;
  }

  table,
  th,
  td {
    border: 1px solid #000;
  }

  thead {
    background: #ffc107;
    text-shadow: 1px 1px 2px #9a7400ab;
  }

  thead th {
    padding: 8px 0;
    font-size: 20px;
    font-weight: 700;
  }

  tbody td {
    padding: 5px 0;
    font-size: 24px;
  }

  td {
    font-weight: 700;
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

  .margin-inline {
    margin-inline: 10px;
  }

  .margin-block {
    margin-block: 8px;
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
  .tricks-container {
    width: 100%;
    margin: 20px 0 30px;
  }

  .tricks-content {
    width: 60%;
    margin: 0 auto;
  }



  @media only screen and (max-width:770px) {
    .tricks-content {
      width: 80%
    }
  }

  @media only screen and (max-width:500px) {
    .tricks-content {
      width: 100%
    }
  }

  .tricks-content-heading {
    background: transparent;
  }

  .tricks-content-heading h1 {
    width: fit-content;
    margin: 0 auto;
    padding: 5px;
    font-size: 36px;
    color: #1a237e;
    text-shadow: 0px 0px;
    text-transform: uppercase;
    margin-bottom: 20px;
    position: relative;
  }

  .tricks-content-heading h1::after {
    content: "";
    width: 50%;
    height: 2px;
    background: #eb008b;
    position: absolute;
    left: 50%;
    top: 100%;
    transform: translateX(-50%);
  }

  .tricks-content-heading h1 a {
    color: #1a237e;
  }

  .tricks-content-heading h1 a:hover,
  .tricks-content-heading h1 a:focus {
    color: #e91e63;
  }

  .list-item {
    border-bottom-width: 10px 
  }

  .red,
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
  .chart-94,
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
  .r {
    color: red;
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

  .btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
  }

  .form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
  }

  .table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
    background: #fff
  }

  .table>thead>tr>th {
    vertical-align: bottom;
    border-bottom: 2px solid #ddd
  }

  .table td,
  .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6
  }

  .bdr {
    border: 2px solid #eb008b;
    border-radius: 10px;
    overflow: hidden
  }

  .bdr2 {
    border-color: #aa00c0
  }

  .bdr3 {
    border-color: #024c88
  }

  .mb-1 {
    margin-bottom: 5px
  }

  .title1 {
    font-size: 17px;
    color: #1a237e
  }

  .p1 {
    font-size: 13px;
    color: #000;
    text-shadow: 1px 1px #f4e1e1
  }

  .p-1 {
    padding: 5px 10px 8px
  }

  .mx-1 {
    margin: 0 5px
  }

  .my-1 {
    margin: 5px 0
  }

  .my-2 {
    margin: 10px 0
  }

  .mb-1 {
    margin-bottom: 5px
  }

  .red-btn {
    border: 2px solid #ff006c;
    background-color: #ff006c;
    color: #fff;
    padding: 4px 8px 3px;
    border-radius: 8px 0;
    font-size: 12px;
    display: inline-block;
    box-shadow: 0 0 10px -3px #000;
    font-weight: 700
  }

  .yellow-btn {
    background-color: #ffc107;
    color: #000;
    border: 1px solid #ff5722;
    padding: 4px 8px 3px;
    border-radius: 8px 0;
    font-size: 12px;
    display: inline-block;
    box-shadow: 0 0 10px -3px #000;
    font-weight: 700
  }

  .red-btn:hover {
    color: #fff
  }

  .bg {
    padding: 5px 10px;
    border-radius: 4px
  }

  .bg-primary {
    background: #024c88;
    color: #fff
  }

  .bg-danger {
    background: #dc3545;
    color: #fff
  }

  .bg-secondary {
    background-color: #6c757d;
    color: #fff
  }

  .bg-success {
    background-color: #28a745;
    color: #fff
  }

  .bg-info {
    background-color: #17a2b8;
    color: #fff
  }

  .bg-warning {
    background-color: #ffc107;
    color: #111
  }

  .bg-light {
    background-color: #f8f9fa;
    color: #343a40
  }

  .bg-dark {
    background-color: #343a40;
    color: #f8f9fa
  }

  .text-primary {
    color: #004086
  }

  .text-danger {
    color: #ff192f
  }

  .text-secondary {
    color: #6c757d
  }

  .text-success {
    color: #009e24
  }

  .text-info {
    color: #17a2b8
  }

  .text-warning {
    color: #ffc107
  }

  .text-light {
    color: #f8f9fa
  }

  .text-dark {
    color: #343a40
  }

  .d-inline {
    display: inline-block
  }

  .d-block {
    display: block
  }

  .ftr-btn-div {
    margin-top: 20px;
    margin-bottom: 20px
  }

  .ftr-btn {
    padding: 10px 12px;
    text-align: center;
    background-color: #e91e63;
    color: #fff;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 600;
    letter-spacing: 1px;
    margin-top: 10px;
    font-size: 15px;
    border: 1px solid #fff;
    transition: all .1s
  }

  .ftr-btn:hover {
    background-color: #f4f4f4;
    border: 1px solid #e91e63;
    color: #e91e63
  }

  .ftr-info p {
    font-size: 16px;
    margin-top: 0;
    margin-bottom: 0;
    color: #1f1f1f;
    font-weight: 700
  }

  .list-item .h4 {
    background-color: #024c88;
    color: #fff;
    padding: 5px 10px 3px;
    font-size: 24px
  }

  .list-item a {
    border-bottom: 2px solid #024c88;
    color: #003c6c;
    display: block;
    font-size: 22px;
    padding: 5px 7px 4px
  }

  .list-item a:last-child {
    border-bottom-width: 0
  }

  .list-item a:hover {
    text-shadow: 1px 1px 2px #fff;
    color: #e91e63;
    background-color: #f5fff0
  }

  .my-card .h4 {
    font-size: 22px;
    text-transform: capitalize;
    border-radius: 0;
    margin-bottom: 5px
  }

  .my-card small {
    color: #000;
    text-shadow: 1px 1px #f4e1e1
  }

  .my-card p {
    line-height: 32px;
    font-weight: 500;
    padding: 10px;
    font-size: 18px;
    color: #000;
    text-shadow: 1px 1px #f4e1e1
  }

  .my-card p .bg,
  .my-card p .bg-danger {
    padding: 4px 8px 4px 6px;
    font-size: 13px;
    font-style: italic
  }

  .my-card p .bg-danger,
  .my-card p .bg-info,
  .my-card p .bg-primary {
    text-shadow: 1px 1px #313131;
    font-weight: 700
  }

  .my-card p .bg-dark,
  .my-card p .bg-secondary {
    font-weight: 700;
    text-shadow: 1px 1px #313131
  }

  .my-card p .bg-warning {
    font-weight: 700;
    text-shadow: 1px 1px 2px #d5a000
  }

  .fz-12 {
    font-size: 12px 
  }

  .fz-14 {
    font-size: 14px 
  }

  .fz-16 {
    font-size: 16px 
  }

  .fz-18 {
    font-size: 18px 
  }

  .fz-20 {
    font-size: 20px 
  }

  .fz-22 {
    font-size: 22px 
  }

  .fz-24 {
    font-size: 24px 
  }

  .lh-50 {
    line-height: 50px
  }

  .page {
    margin: 0 0 5px
  }

  .page a.btn {
    border: 1px solid #fff;
    background-color: #e91e63;
    color: #fff;
    padding: 4px 8px 3px;
    border-radius: 5px;
    font-size: 14px;
    display: inline-block;
    box-shadow: 0 0 10px -3px #000;
    font-weight: 700
  }

  .page a.btn:hover {
    background: #fff;
    color: #e91e63;
    border-color: #e91e63
  }

  .page a span {
    font-size: 18px;
    line-height: 17px
  }

  .page a b {
    display: inline-block
  }
</style>