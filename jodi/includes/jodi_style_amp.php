<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "NewsArticle",
    "author": "spboss.mobi",
    "headline": "Open-source framework for publishing content",
    "datePublished": "2015-10-07T12:02:41Z",
    "image": ["logo.jpg"],
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
  body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}
  @-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
  @-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
  @-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
  @-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
  @keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
</style>

<noscript>
  <style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style>
</noscript>

<style amp-custom>
  /* ===== Reset & Base ===== */
  *, *::after, *::before { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; }

  body {
    font-family: Helvetica, sans-serif;
    font-weight: 700;
    text-align: center;
    padding: 0;
    background: #fff;
  }

  h1 { color: #fff8f8; }

  table { border-collapse: collapse; }
  table, th, td { border: 1px solid #d7def5; }

  thead {
    background: #1a237e;
    color: #fff;
    text-shadow: none;
  }
  thead th { padding: 9px 4px; font-size: 18px; font-weight: 800; }

  tbody td { padding: 7px 4px; font-size: 22px; }
  td { font-weight: 700; }

  /* ===== Color Utilities ===== */
  .red-text    { color: red; }
  .green-text  { color: green; }
  .blue-text   { color: blue; }
  .purple-text { color: purple; }

  /* ===== Logo / Header ===== */
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
    transition: transform 150ms cubic-bezier(0,0,.58,1), background 150ms cubic-bezier(0,0,.58,1);
    box-shadow: 0 4px 15px rgba(26,35,126,0.4);
  }
  .logo a { display: block; padding: 10px 0; }
  .logo a img { display: block; padding: 0; margin: 0 auto; max-width: 100%; height: auto; }
  .logo amp-img { width: 220px; height: auto; display: block; padding: 0; margin: 0 auto; }

  @media screen and (max-width:300px) {
    .logo a img { height: 40px; width: auto; }
  }

  /* ===== Shared Button Style ===== */
  .button2, .goTopBtn {
    background: linear-gradient(135deg, #b8860b 0%, #f0c040 50%, #d4a017 100%);
    color: #1a0a00;
    padding: 6px 18px;
    border: 1px solid rgba(255,255,255,.5);
    font-weight: 700;
    letter-spacing: .5px;
    text-decoration: none;
    text-shadow: none;
    box-shadow: 0 2px 8px rgba(184,134,11,.4);
    display: inline-block;
    transition: all .25s ease;
    border-radius: 20px;
  }
  .button2 { font-size: 13px; margin: 10px 0 20px; }
  .goTopBtn { font-size: 12px; margin: 16px 0 10px; }

  /* ===== Jodi Container ===== */
  .jodi-container { width: 100%; margin: 12px 0 30px; padding: 0 6px; }

  .jodi-content {
    border: 2px solid #0b8f5a;
    width: 100%;
    max-width: 760px;
    margin: 0 auto;
    border-radius: 14px;
    overflow: hidden;
    background: #ecfff5;
    box-shadow: 0 8px 22px rgba(0,105,68,0.18);
  }

  .jodi-content-heading {
    background: linear-gradient(135deg, #006b3f 0%, #00985f 58%, #16b978 100%);
    border-bottom: 2px solid #9df0c6;
  }
  .jodi-content-heading h1 {
    margin: 0;
    padding: 10px 6px;
    font-size: 21px;
    color: #fff;
    text-shadow: 1px 1px 2px rgba(0,0,0,.35);
    letter-spacing: .4px;
  }

  .jodi-content-body {
    overflow-x: auto;
    background: linear-gradient(to bottom, #f5fff9 0%, #e6f8ef 100%);
    padding: 5px;
  }

  .jodi-content-chart {
    width: 100%;
    text-align: center;
    border-collapse: separate;
    border-spacing: 4px;
    background: #dff8eb;
    box-shadow: none;
  }
  .jodi-content-chart th, .jodi-content-chart td {
    border: 1px solid #b6dcc8;
    border-radius: 7px;
    text-shadow: none;
  }
  .jodi-content-chart thead th {
    background: linear-gradient(180deg, #0a8d57 0%, #087348 100%);
    color: #fff;
    border-color: #7ad7a7;
    padding: 10px 4px;
    font-size: 16px;
    letter-spacing: .3px;
  }
  .jodi-content-chart tbody td {
    color: #102a3a;
    font-weight: 900;
    background: #fff;
    box-shadow: inset 0 1px 0 rgba(255,255,255,.8);
  }
  .jodi-content-chart tbody td:nth-child(1) { background: #fff9df; font-size: 14px; }
  .jodi-content-chart tbody td:nth-child(2) { background: #e6f5ff; }
  .jodi-content-chart tbody td:nth-child(3) { background: #f2ecff; }
  .jodi-content-chart tbody td:nth-child(4) { background: #eafff1; }
  .jodi-content-chart tbody td:nth-child(5) { background: #fff0f3; }
  .jodi-content-chart tbody td:nth-child(6) { background: #eef3ff; }
  .jodi-content-chart tbody td:nth-child(7) { background: #fff6e8; }
  .jodi-content-chart tbody tr:nth-child(even) td { border-color: #a9d4bd; }

  /* ===== Red Number Classes ===== */
  .red, .r, .css-11, .css-16, .css-22, .css-27, .css-33, .css-38, .css-44, .css-49,
  .css-50, .css-55, .css-61, .css-66, .css-72, .css-83, .css-88, .css-94,
  .css-99, .css-05, .css-00, .css-77, .css-star,
  .chart-11, .chart-22, .chart-33, .chart-44, .chart-55, .chart-66,
  .chart-77, .chart-88, .chart-99, .chart-00,
  .chat-05, .chat-50, .chat-16, .chat-61, .chat-27, .chat-72,
  .chat-38, .chat-83, .chat-49, .chat-94,
  .chart-05, .chart-50, .chart-16, .chart-61, .chart-27, .chart-72,
  .chart-38, .chart-83, .chart-49, .chart-94 { color: red; }

  /* ===== Chart Heading ===== */
  .chart-h1 {
    background: linear-gradient(135deg, #006b3f 0%, #00985f 58%, #16b978 100%);
    padding: 9px 12px;
    text-shadow: 1px 1px 2px rgba(0,0,0,.45);
    display: block;
    color: #fff;
    letter-spacing: 1px;
    font-weight: 800;
    border: 2px solid #9df0c6;
    border-radius: 10px 10px 0 0;
    transform-style: preserve-3d;
    transition: transform 150ms cubic-bezier(0,0,.58,1), background 150ms cubic-bezier(0,0,.58,1);
    font-size: 18px;
    margin: 6px 2px 0;
  }

  /* ===== Para3 Info Box ===== */
  .para3 {
    background: linear-gradient(187deg, #fc9 50%, #ffc387 50%);
    border: 2px outset #ff0016;
    margin-bottom: 3px;
    line-height: 1.4;
    font-size: 14px;
    padding: 4px 10px;
    color: #00094d;
    text-shadow: 1px 1px 2px #fff;
    box-shadow: 0 0 20px rgba(0,0,0,0.4);
  }
  .para3 h2 { font-size: 14px; margin: 0; }
  .para3 p  { margin: 0; font-size: 12px; line-height: 14px; }

  /* ===== Chart Result Card ===== */
  .chart-result {
    margin: 0 2px 10px;
    line-height: 1.45;
    font-size: 14px;
    padding: 12px 10px 14px;
    color: #00094d;
    text-shadow: none;
    box-shadow: 0 6px 18px rgba(0,105,68,.16);
    border: 2px solid #9ddfc0;
    border-top: 0;
    border-radius: 0 0 10px 10px;
    background: linear-gradient(180deg, #f7fffb 0%, #e8fff2 100%);
  }
  .chart-result div  { font-size: 21px; color: #083f32; text-shadow: none; font-weight: 900; letter-spacing: .3px; }
  .chart-result span { color: #b0003a; text-shadow: none; font-size: 21px; display: inline-block; margin: 2px 0 5px; }
  .chart-result a {
    background: linear-gradient(135deg, #b8860b 0%, #f0c040 50%, #d4a017 100%);
    border: 1px solid rgba(255,255,255,.5);
    color: #1a0a00;
    padding: 10px 14px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: .5px;
    margin: 3px 0 0;
    display: inline-block;
    transition: all .25s ease;
    box-shadow: 0 2px 8px rgba(184,134,11,.4);
    cursor: pointer;
    text-shadow: none;
    text-decoration: none;
  }

  /* ===== Footer Info Section ===== */
  .jodi-footer-container {
    max-width: 95%;
    text-align: left;
    margin: 25px auto;
    border: 1px solid #e2e8f0;
    border-top: 4px solid #006b3f;
    background: #fff;
    padding: 24px 20px;
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(0,107,63,0.04);
  }
  .jodi-footer-content { max-width: 100%; padding: 0 0 16px; margin: 0; }

  .jodi-footer-container h2.small-heading {
    font-size: 17px;
    font-weight: 700;
    color: #0f172a;
    text-shadow: none;
    margin-top: 15px;
    margin-bottom: 8px;
    position: relative;
    padding-left: 12px;
  }
  .jodi-footer-container h2.small-heading::before {
    content: '';
    position: absolute;
    left: 0;
    top: 3px;
    width: 3.5px;
    height: 16px;
    background: #006b3f;
    border-radius: 2px;
  }
  .jodi-footer-container p {
    font-weight: 400;
    font-size: 13.5px;
    line-height: 1.6;
    color: #475569;
    padding: 0;
    margin: 0 0 12px;
  }
  .jodi-footer-container h2.faq-heading {
    font-size: 19px;
    font-weight: 800;
    color: #0f172a;
    text-shadow: none;
    margin-top: 25px;
    margin-bottom: 15px;
    border-bottom: 2px solid #f1f5f9;
    padding-bottom: 8px;
  }
  .jodi-footer-content-faq {
    background: #f8fafc;
    padding: 18px;
    border-radius: 8px;
    border: 1px solid #f1f5f9;
    margin-top: 10px;
  }
  .jodi-footer-container h3.faq-title {
    font-size: 14.5px;
    font-weight: 700;
    background: transparent;
    color: #1e293b;
    text-shadow: none;
    letter-spacing: 0.5px;
    margin: 16px 0 6px;
  }
  .jodi-footer-container h3.faq-title:first-of-type { margin-top: 0; }
  .jodi-footer-container p.faq-ans {
    margin: 0 0 14px;
    font-size: 13px;
    color: #475569;
    line-height: 1.55;
    padding-left: 10px;
    border-left: 2px solid #cbd5e1;
  }

  /* ===== Chart List ===== */
  .chart-list {
    border: 2px solid #eb008b;
    width: 50%;
    margin: 10px auto;
    text-align: center;
    font-weight: 600;
  }
  .chart-list.ab1 { border-color: #003c6c; }
  .chart-list h4 { color: #fff; padding: 5px 10px 3px; font-size: 24px; border-top-left-radius: 7px; margin: 0; }
  .chart-list.ab1 h4 { background-color: #024c88; }
  .chart-list a { display: block; font-size: 22px; padding: 5px 7px 4px; text-decoration: none; }
  .chart-list.ab1 a { border-bottom: 2px solid #024c88; color: #003c6c; }
  .chart-list a:hover { background-color: #fff; text-decoration: underline; }

  @media only screen and (max-width:500px) {
    .chart-list { width: 95%; }
  }

  /* ===== Footer ===== */
  footer {
    background: #0f172a;
    color: #94a3b8;
    font-weight: 500;
    font-size: 14px;
    text-decoration: none;
    border: none;
    border-radius: 12px;
    text-shadow: none;
    margin: 20px 4px 15px;
    padding: 24px 16px;
    box-shadow: 0 8px 30px rgba(15,23,42,0.2);
  }
  footer > div {
    border-bottom: 1px solid #1e293b;
    padding: 10px 0 16px;
    margin-bottom: 16px;
    line-height: 1.8;
  }
  footer > div a {
    color: #38bdf8;
    text-decoration: none;
    line-height: 1.6;
    padding: 4px 8px;
    font-size: 15px;
    font-weight: 600;
    display: inline-block;
    transition: color 0.2s ease, transform 0.2s ease;
  }
  footer > div a:hover { color: #f43f5e; transform: translateY(-1px); }
  footer .ftr-icon {
    text-decoration: none;
    font-size: 24px;
    text-transform: uppercase;
    color: #f8fafc;
    letter-spacing: 1px;
    text-shadow: none;
    font-weight: 800;
    display: block;
    margin-bottom: 8px;
    transition: color 0.2s ease;
  }
  footer .ftr-icon:hover { color: #38bdf8; }

  @media only screen and (max-width:500px) {
    footer { font-size: 13px; padding: 16px 12px 18px; }
    footer > div a { font-size: 13.5px; line-height: 1.65; }
    footer .ftr-icon { font-size: 20px; }
  }

  /* ===== Mobile Back Button ===== */
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
</style>
