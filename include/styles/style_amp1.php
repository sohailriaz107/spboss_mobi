<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

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
    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box
    }

    html {
        overflow-x: hidden;
        scroll-behavior: smooth
    }

    body {
        background-color: #fc9;
        text-align: center;
        padding: 3px 10px;
        margin: 0;
        scroll-behavior: smooth;
        font-style: italic;
        font-family: Helvetica, sans-serif;
        font-weight: 700
    }

    a,
    a:hover {
        text-decoration: none
    }

    a {
        text-decoration: none ;
        color: inherit
    }

    p {
        color: #000b65;
        text-shadow: 1px 1px 2px #fff
    }

    table {
        box-shadow: 0 0 20px 0 rgb(0 0 0 / 40%);
        margin: 5px 0
    }

    ul {
        list-style-type: none;
    }

    ul>li>ul {
        list-style-type: circle;
    }

    ul>li>ul>li>ul {
        list-style-type: square;
    }

    ol li {
        font-family: Arial;
    }

    .ftr-sm {
        color: #000;
        text-align: center;
        margin-bottom: 8px;
        margin-top: -2px;
        display: block;
        font-size: 20px;
        outline: 4px #fff;
        outline-offset: -9px;
        border: 2px solid #ff182c ;
        border-style: outset;
        border-radius: 10px;
        box-shadow: 0 0 20px 0 rgb(0 0 0 / 40%);
        font-size: 12px;
        text-align: left;
        font-style: normal;
        font-weight: lighter;
        padding: 5px 25px;
    }

    .ftr-sm h2 {
        color: #bb2833;
        text-shadow: 1px 1px 2px #fff
    }

    .ftr-sm h2,
    .ftr-sm p {
        font-style: normal
    }

    .ftr-sm h4 {
        font-size: 18px;
        margin-bottom: 4px;
        color: #d3003f
    }

    .ftr-sm p {
        color: #a50031;
        font-size: 12px;
        line-height: 1.4
    }

    @media only screen and (max-width:500px) {
        body {
            padding: 2px 5px
        }
    }

    .text-left-line-1 {
        text-align: left;
        line-height: 1;
    }

    .line-height-15 {
        line-height: 1.5;
    }

    .font-size-15 {
        font-size: 15px;
    }

    .banner {
        background: #ff00a2;
        padding: 5px 10px;
        text-shadow: 1px 1px 2px #000;
        display: block;
        color: #fff8f8 ;
        margin-bottom: 20px;
        letter-spacing: 1px;
        font-weight: 700;
        border: 2px solid #fff;
        border-radius: .75em;
        transform-style: preserve-3d;
        transition: transform 150ms cubic-bezier(0, 0, .58, 1), background 150ms cubic-bezier(0, 0, .58, 1)
    }

    h2.banner {
        font-size: 18px;
    }

    .about-ftr-sm {
        text-align: center;
        font-weight: 700;
    }



    .conta {
        color: #000;
        text-align: center;
        margin-bottom: 8px;
        margin-top: -2px;
        font-size: 20px;
        outline: 4px #fff;
        outline-offset: -9px;
        border: 2px solid #ff182c ;
        border-style: outset;
        border-radius: 10px;
        box-shadow: 0 0 20px 0 rgb(0 0 0 / 40%);
        padding-top: 4px;
        padding-bottom: 7px;
        background-color: #fbe7ff;
        display: block;
        -ms-align-items: center;
        align-items: center;
        justify-content: center
    }

    .conta h4 {
        background: #ff00a2;
        padding: 5px 10px;
        padding-top: 5px;
        padding-top: 5px;
        text-shadow: 1px 1px 2px #000;
        display: block;
        color: #fff8f8 ;
        margin-bottom: 20px;
        letter-spacing: 1px;
        font-weight: 700;
        border: 2px solid #fff;
        border-radius: .75em;
        transform-style: preserve-3d;
        transition: transform 150ms cubic-bezier(0, 0, .58, 1), background 150ms cubic-bezier(0, 0, .58, 1);
    }

    .conta h4::before {
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #ff182c;
        border-radius: inherit;
        transform: translate3d(0, .75em, -1em);
        transition: transform 150ms cubic-bezier(0, 0, .58, 1), box-shadow 150ms cubic-bezier(0, 0, .58, 1);
    }

    .conta p {
        font-size: 22px;
        color: #ed143d;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-right: 12px
    }

    .conta a:hover {
        box-shadow: 0 0 10px 0 #000
    }

    @media only screen and (max-width:500px) {
        .conta p {
            display: block;
            font-size: 17px
        }

        .conta {
            display: block
        }

        .conta a {
            margin-top: 5px
        }
    }

    .form-group label {
        text-align: left ;
        display: block;
        color: #373737;
        font-size: 15px;
    }

    .form-group {
        padding: 0px 9px;
    }

    .address div {
        text-align: left;
        font-size: 12px;
    }

    .address {
        margin-top: 34px;
        padding-left: 79px;
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: center;
        text-decoration: none;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 3px 10px;
        margin: 4px 0 1px;
        font-size: 16px;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        cursor: pointer;
    }

    .btn.btn-black {
        background: #ff9a34;
        color: black;
        font-weight: bold;
    }

    .B1 {
        background-color: #FFCC99;
        color: black;
        border-width: 3px;
        border-color: #FF006C;
        border-style: solid;
        margin-top: 1px;
        margin-bottom: 1px;
        font-weight: bold;
        font-size: x-large;
        font-style: none;
        text-shadow: 1px 1px navy;
        padding-top: 1px;
        padding-bottom: 1px;
        padding-left: 2px;
        padding-right: 2px;
        margin-bottom: 8px;
        border-radius: 10px;
    }


    <?php if (strpos($currentPage, 'privacy-policy.php') !== false): ?>.button2 {
        background-color: #a0d5ff;
        color: #220c82;
        padding: 10px 30px;
        font-size: 16px;
        margin: 20px auto;
        border-radius: 10px;
        border: 2px solid #0000005c;
        font-weight: 800;
        text-shadow: 1px 1px #00bcd4;
        box-shadow: 0 8px 10px 0 rgb(0 0 0 / 20%), 0 6px 8px 0 rgb(0 0 0 / 19%);
        display: inline-block;
        transition: all .3s;
    }

    .chart-list {
        border: 2px solid #eb008b;
        border-radius: 10px 0 10px 10px;
        margin-bottom: 2px;
        width: 50%;
        margin: 0 auto 10px;
        text-align: center;
        font-weight: 600;
    }

    .chart-list.ab1 {
        border-color: #003c6c;
    }

    .chart-list h1 {
        color: #fff;
        padding: 5px 10px 3px;
        font-size: 24px;
        border-top-left-radius: 7px;
        margin: 0;
    }

    .chart-list.ab1 h1 {
        background-color: #024c88;
    }

    .chart-list a {
        display: block;
        font-size: 22px;
        padding: 5px 7px 4px;
        text-decoration: none;
    }

    .chart-list.ab1 a {
        border-bottom: 2px solid #024c88;
        color: #003c6c;
    }

    footer {
        background-color: #fff;
        color: red;
        font-weight: bold;
        font-size: 25px;
        text-decoration: none;
        border: 4px groove purple;
        border-radius: 10px 0 0 0;
        text-shadow: 1px 1px gold;
        margin: 3px;
    }

    footer>div {
        border-bottom: 2px solid #b2ddff;
        padding: 10px 0;
        margin-bottom: 10px;
    }

    footer>div a {
        text-decoration: none;
    }

    footer>div a:hover {
        text-decoration: none;
    }

    footer .ftr-icon {
        text-decoration: none;
        font-size: 35px;
        text-transform: uppercase;
        color: #007bff;
    }

    footer p {
        margin: 10px 0 10px;
        line-height: 35px;
        margin: 10px 0 10px;
        line-height: 35px;
        color: red;
        font-weight: bold;
        font-size: 25px;
        text-shadow: 1px 1px gold;
    }

    footer p span {
        color: #36f;
    }

    @media only screen and (max-width:500px) {
        .chart-list {
            width: 95%;
        }
    }

    <?php else: ?>footer {
        background-color: #fff;
        color: red;
        font-weight: bold;
        font-size: 25px;
        text-decoration: none;
        border: 4px groove purple;
        border-radius: 10px 0 0 0;
        text-shadow: 1px 1px gold;
        margin: 3px;
        font-style: normal;
    }

    footer>div {
        border-bottom: 2px solid #b2ddff;
        padding: 10px 0;
        margin-bottom: 10px;
    }

    footer>div a {
        text-decoration: none;
    }

    footer p {
        margin: 10px 0 10px;
        line-height: 35px;
        color: red;
        font-weight: bold;
        font-size: 25px;
        text-shadow: 1px 1px gold;
    }

    footer .ftr-icon {
        text-decoration: none;
        font-size: 35px;
        text-transform: uppercase;
        color: #007bff;
    }

    footer p span {
        color: #36f;
    }

    .button2 {
        background-color: #a0d5ff;
        color: #220c82;
        padding: 10px 30px;
        font-size: 16px;
        margin: 20px auto;
        border-radius: 10px;
        border: 2px solid #0000005c;
        font-weight: 800;
        text-shadow: 1px 1px #00bcd4;
        box-shadow: 0 8px 10px 0 rgba(0, 0, 0, .2), 0 6px 8px 0 rgba(0, 0, 0, .19);
        display: inline-block;
        transition: all .3s;
    }

    .chart-list {
        border: 2px solid #eb008b;
        border-top-color: rgb(235, 0, 139);
        border-right-color: rgb(235, 0, 139);
        border-bottom-color: rgb(235, 0, 139);
        border-left-color: rgb(235, 0, 139);
        border-radius: 10px 0 10px 10px;
        margin-bottom: 2px;
        width: 50%;
        margin: 0 auto 10px;
        text-align: center;
        font-weight: 600;
    }

    .chart-list.ab1 {
        border-color: #003c6c;
    }

    .chart-list.ab1 h4 {
        background-color: #024c88;
    }

    .chart-list h4 {
        color: #fff;
        padding: 5px 10px 3px;
        font-size: 24px;
        border-top-left-radius: 7px;
        margin: 0;
    }

    .chart-list a {
        display: block;
        font-size: 22px;
        padding: 5px 7px 4px;
        text-decoration: none;
    }

    .chart-list.ab1 a {
        border-bottom: 2px solid #024c88;
        color: #003c6c;
    }

    .chart-list.ab1 h4 {
        background-color: #024c88;
        border-radius: 7px 0px 0px;
        border: none;
    }

    .chart-list.ab1 h4::before {
        content: none;
    }

    .chart-list span {
        display: block;
        background-color: #024c88;
        color: #fff;
        padding: 5px 10px 3px;
        font-size: 24px;
        border-top-left-radius: 7px;
        text-align: center;
        font-weight: 600;
    }

    @media only screen and (max-width:500px) {
        .chart-list {
            width: 95%;
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
        border-radius: 5px;
    }

    <?php endif; ?>
</style>