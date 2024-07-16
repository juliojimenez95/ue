<!DOCTYPE html>
<html lang="eS">

<head>
    <meta charset="utf-8" />
    <title>REPORTE - IUE</title>
    <style>
        @charset "UTF-8";

        :root {
            --bs-blue: #435ebe;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #d63384;
            --bs-red: #dc3545;
            --bs-orange: #fd7e14;
            --bs-yellow: #ffc107;
            --bs-green: #198754;
            --bs-teal: #20c997;
            --bs-cyan: #0dcaf0;
            --bs-white: #fff;
            --bs-gray: #6c757d;
            --bs-gray-dark: #343a40;
            --bs-primary: #435ebe;
            --bs-secondary: #6c757d;
            --bs-success: #198754;
            --bs-info: #0dcaf0;
            --bs-warning: #ffc107;
            --bs-danger: #dc3545;
            --bs-light: #f8f9fa;
            --bs-dark: #212529;
            --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, hsla(0, 0%, 100%, 0.15), hsla(0, 0%, 100%, 0))
        }

        *,
        :after,
        :before {
            box-sizing: border-box
        }

        @media (prefers-reduced-motion:no-preference) {
            :root {
                scroll-behavior: smooth
            }
        }

        body {
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            background-color: #f2f7ff;
            color: #607080;
            font-family: Nunito;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            margin: 0
        }

        hr {
            background-color: currentColor;
            border: 0;
            color: inherit;
            margin: 1rem 0;
            opacity: .25
        }

        hr:not([size]) {
            height: 1px
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #25396f;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: .5rem;
            margin-top: 0
        }

        .h1,
        h1 {
            font-size: calc(1.375rem + 1.5vw)
        }

        @media (min-width:1200px) {

            .h1,
            h1 {
                font-size: 2.5rem
            }
        }

        .h2,
        h2 {
            font-size: calc(1.325rem + .9vw)
        }

        @media (min-width:1200px) {

            .h2,
            h2 {
                font-size: 2rem
            }
        }

        .h3,
        h3 {
            font-size: calc(1.3rem + .6vw)
        }

        @media (min-width:1200px) {

            .h3,
            h3 {
                font-size: 1.75rem
            }
        }

        .h4,
        h4 {
            font-size: calc(1.275rem + .3vw)
        }

        @media (min-width:1200px) {

            .h4,
            h4 {
                font-size: 1.5rem
            }
        }

        .h5,
        h5 {
            font-size: 1.25rem
        }

        .h6,
        h6 {
            font-size: 1rem
        }

        p {
            margin-bottom: 1rem;
            margin-top: 0
        }

        abbr[data-bs-original-title],
        abbr[title] {
            cursor: help;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none
        }

        address {
            font-style: normal;
            line-height: inherit;
            margin-bottom: 1rem
        }

        ol,
        ul {
            padding-left: 2rem
        }

        dl,
        ol,
        ul {
            margin-bottom: 1rem;
            margin-top: 0
        }

        ol ol,
        ol ul,
        ul ol,
        ul ul {
            margin-bottom: 0
        }

        dt {
            font-weight: 700
        }

        dd {
            margin-bottom: .5rem;
            margin-left: 0
        }

        blockquote {
            margin: 0 0 1rem
        }

        b,
        strong {
            font-weight: bolder
        }

        .small,
        small {
            font-size: .875em
        }

        .mark,
        mark {
            background-color: #fcf8e3;
            padding: .2em
        }

        sub,
        sup {
            font-size: .75em;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        a {
            color: #435ebe;
            text-decoration: underline
        }

        a:hover {
            color: #364b98
        }

        a:not([href]):not([class]),
        a:not([href]):not([class]):hover {
            color: inherit;
            text-decoration: none
        }

        code,
        kbd,
        pre,
        samp {
            direction: ltr;
            font-family: var(--bs-font-monospace);
            font-size: 1em;
            unicode-bidi: bidi-override
        }

        pre {
            display: block;
            font-size: .875em;
            margin-bottom: 1rem;
            margin-top: 0;
            overflow: auto
        }

        pre code {
            color: inherit;
            font-size: inherit;
            word-break: normal
        }

        code {
            word-wrap: break-word;
            color: #d63384;
            font-size: .875em
        }

        a>code {
            color: inherit
        }

        kbd {
            background-color: #212529;
            border-radius: .2rem;
            color: #fff;
            font-size: .875em;
            padding: .2rem .4rem
        }

        kbd kbd {
            font-size: 1em;
            font-weight: 700;
            padding: 0
        }

        figure {
            margin: 0 0 1rem
        }

        img,
        svg {
            vertical-align: middle
        }

        table {
            border-collapse: collapse;
            caption-side: bottom
        }

        caption {
            color: #7c8db5;
            padding-bottom: .5rem;
            padding-top: .5rem;
            text-align: left
        }

        th {
            text-align: inherit;
            text-align: -webkit-match-parent
        }

        tbody,
        td,
        tfoot,
        th,
        thead,
        tr {
            border: 0 solid;
            border-color: inherit
        }

        label {
            display: inline-block
        }

        button {
            border-radius: 0
        }

        button:focus:not(:focus-visible) {
            outline: 0
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            margin: 0
        }

        button,
        select {
            text-transform: none
        }

        [role=button] {
            cursor: pointer
        }

        select {
            word-wrap: normal
        }

        select:disabled {
            opacity: 1
        }

        [list]::-webkit-calendar-picker-indicator {
            display: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button
        }

        [type=button]:not(:disabled),
        [type=reset]:not(:disabled),
        [type=submit]:not(:disabled),
        button:not(:disabled) {
            cursor: pointer
        }

        ::-moz-focus-inner {
            border-style: none;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        fieldset {
            border: 0;
            margin: 0;
            min-width: 0;
            padding: 0
        }

        legend {
            float: left;
            font-size: calc(1.275rem + .3vw);
            line-height: inherit;
            margin-bottom: .5rem;
            padding: 0;
            width: 100%
        }

        @media (min-width:1200px) {
            legend {
                font-size: 1.5rem
            }
        }

        legend+* {
            clear: left
        }

        ::-webkit-datetime-edit-day-field,
        ::-webkit-datetime-edit-fields-wrapper,
        ::-webkit-datetime-edit-hour-field,
        ::-webkit-datetime-edit-minute,
        ::-webkit-datetime-edit-month-field,
        ::-webkit-datetime-edit-text,
        ::-webkit-datetime-edit-year-field {
            padding: 0
        }

        ::-webkit-inner-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-color-swatch-wrapper {
            padding: 0
        }

        ::file-selector-button {
            font: inherit
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        output {
            display: inline-block
        }

        iframe {
            border: 0
        }

        summary {
            cursor: pointer;
            display: list-item
        }

        progress {
            vertical-align: baseline
        }

        [hidden] {
            display: none !important
        }

        .lead {
            font-size: 1.25rem;
            font-weight: 300
        }

        .display-1 {
            font-size: calc(1.625rem + 4.5vw);
            font-weight: 300;
            line-height: 1.2
        }

        @media (min-width:1200px) {
            .display-1 {
                font-size: 5rem
            }
        }

        .display-2 {
            font-size: calc(1.575rem + 3.9vw);
            font-weight: 300;
            line-height: 1.2
        }

        @media (min-width:1200px) {
            .display-2 {
                font-size: 4.5rem
            }
        }

        .display-3 {
            font-size: calc(1.525rem + 3.3vw);
            font-weight: 300;
            line-height: 1.2
        }

        @media (min-width:1200px) {
            .display-3 {
                font-size: 4rem
            }
        }

        .display-4 {
            font-size: calc(1.475rem + 2.7vw);
            font-weight: 300;
            line-height: 1.2
        }

        @media (min-width:1200px) {
            .display-4 {
                font-size: 3.5rem
            }
        }

        .display-5 {
            font-size: calc(1.425rem + 2.1vw);
            font-weight: 300;
            line-height: 1.2
        }

        @media (min-width:1200px) {
            .display-5 {
                font-size: 3rem
            }
        }

        .display-6 {
            font-size: calc(1.375rem + 1.5vw);
            font-weight: 300;
            line-height: 1.2
        }

        @media (min-width:1200px) {
            .display-6 {
                font-size: 2.5rem
            }
        }

        .list-inline,
        .list-unstyled {
            list-style: none;
            padding-left: 0
        }

        .list-inline-item {
            display: inline-block
        }

        .list-inline-item:not(:last-child) {
            margin-right: .5rem
        }

        .initialism {
            font-size: .875em;
            text-transform: uppercase
        }

        .blockquote {
            font-size: 1.25rem;
            margin-bottom: 1rem
        }

        .blockquote>:last-child {
            margin-bottom: 0
        }

        .blockquote-footer {
            color: #6c757d;
            font-size: .875em;
            margin-bottom: 1rem;
            margin-top: -1rem
        }

        .blockquote-footer:before {
            content: "— "
        }

        .img-fluid,
        .img-thumbnail {
            height: auto;
            max-width: 100%
        }

        .img-thumbnail {
            background-color: #f2f7ff;
            border: 1px solid #dee2e6;
            border-radius: .25rem;
            padding: .25rem
        }

        .figure {
            display: inline-block
        }

        .figure-img {
            line-height: 1;
            margin-bottom: .5rem
        }

        .figure-caption {
            color: #6c757d;
            font-size: .875em
        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            margin-left: auto;
            margin-right: auto;
            padding-left: var(--bs-gutter-x, .75rem);
            padding-right: var(--bs-gutter-x, .75rem);
            width: 100%
        }

        @media (min-width:576px) {

            .container,
            .container-sm {
                max-width: 540px
            }
        }

        @media (min-width:768px) {

            .container,
            .container-md,
            .container-sm {
                max-width: 720px
            }
        }

        @media (min-width:992px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm {
                max-width: 960px
            }
        }

        @media (min-width:1200px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl {
                max-width: 1140px
            }
        }

        @media (min-width:1400px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl,
            .container-xxl {
                max-width: 1320px
            }
        }

        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-left: calc(var(--bs-gutter-x)*-.5);
            margin-right: calc(var(--bs-gutter-x)*-.5);
            margin-top: calc(var(--bs-gutter-y)*-1)
        }

        .row>* {
            flex-shrink: 0;
            margin-top: var(--bs-gutter-y);
            max-width: 100%;
            padding-left: calc(var(--bs-gutter-x)*.5);
            padding-right: calc(var(--bs-gutter-x)*.5);
            width: 100%
        }

        .col {
            flex: 1 0 0%
        }

        .row-cols-auto>* {
            flex: 0 0 auto;
            width: auto
        }

        .row-cols-1>* {
            flex: 0 0 auto;
            width: 100%
        }

        .row-cols-2>* {
            flex: 0 0 auto;
            width: 50%
        }

        .row-cols-3>* {
            flex: 0 0 auto;
            width: 33.3333333333%
        }

        .row-cols-4>* {
            flex: 0 0 auto;
            width: 25%
        }

        .row-cols-5>* {
            flex: 0 0 auto;
            width: 20%
        }

        .row-cols-6>* {
            flex: 0 0 auto;
            width: 16.6666666667%
        }

        @media (min-width:576px) {
            .col-sm {
                flex: 1 0 0%
            }

            .row-cols-sm-auto>* {
                flex: 0 0 auto;
                width: auto
            }

            .row-cols-sm-1>* {
                flex: 0 0 auto;
                width: 100%
            }

            .row-cols-sm-2>* {
                flex: 0 0 auto;
                width: 50%
            }

            .row-cols-sm-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%
            }

            .row-cols-sm-4>* {
                flex: 0 0 auto;
                width: 25%
            }

            .row-cols-sm-5>* {
                flex: 0 0 auto;
                width: 20%
            }

            .row-cols-sm-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%
            }
        }

        @media (min-width:768px) {
            .col-md {
                flex: 1 0 0%
            }

            .row-cols-md-auto>* {
                flex: 0 0 auto;
                width: auto
            }

            .row-cols-md-1>* {
                flex: 0 0 auto;
                width: 100%
            }

            .row-cols-md-2>* {
                flex: 0 0 auto;
                width: 50%
            }

            .row-cols-md-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%
            }

            .row-cols-md-4>* {
                flex: 0 0 auto;
                width: 25%
            }

            .row-cols-md-5>* {
                flex: 0 0 auto;
                width: 20%
            }

            .row-cols-md-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%
            }
        }

        @media (min-width:992px) {
            .col-lg {
                flex: 1 0 0%
            }

            .row-cols-lg-auto>* {
                flex: 0 0 auto;
                width: auto
            }

            .row-cols-lg-1>* {
                flex: 0 0 auto;
                width: 100%
            }

            .row-cols-lg-2>* {
                flex: 0 0 auto;
                width: 50%
            }

            .row-cols-lg-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%
            }

            .row-cols-lg-4>* {
                flex: 0 0 auto;
                width: 25%
            }

            .row-cols-lg-5>* {
                flex: 0 0 auto;
                width: 20%
            }

            .row-cols-lg-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%
            }
        }

        @media (min-width:1200px) {
            .col-xl {
                flex: 1 0 0%
            }

            .row-cols-xl-auto>* {
                flex: 0 0 auto;
                width: auto
            }

            .row-cols-xl-1>* {
                flex: 0 0 auto;
                width: 100%
            }

            .row-cols-xl-2>* {
                flex: 0 0 auto;
                width: 50%
            }

            .row-cols-xl-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%
            }

            .row-cols-xl-4>* {
                flex: 0 0 auto;
                width: 25%
            }

            .row-cols-xl-5>* {
                flex: 0 0 auto;
                width: 20%
            }

            .row-cols-xl-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%
            }
        }

        @media (min-width:1400px) {
            .col-xxl {
                flex: 1 0 0%
            }

            .row-cols-xxl-auto>* {
                flex: 0 0 auto;
                width: auto
            }

            .row-cols-xxl-1>* {
                flex: 0 0 auto;
                width: 100%
            }

            .row-cols-xxl-2>* {
                flex: 0 0 auto;
                width: 50%
            }

            .row-cols-xxl-3>* {
                flex: 0 0 auto;
                width: 33.3333333333%
            }

            .row-cols-xxl-4>* {
                flex: 0 0 auto;
                width: 25%
            }

            .row-cols-xxl-5>* {
                flex: 0 0 auto;
                width: 20%
            }

            .row-cols-xxl-6>* {
                flex: 0 0 auto;
                width: 16.6666666667%
            }
        }

        .col-auto {
            flex: 0 0 auto;
            width: auto
        }

        .col-1 {
            flex: 0 0 auto;
            width: 8.33333333%
        }

        .col-2 {
            flex: 0 0 auto;
            width: 16.66666667%
        }

        .col-3 {
            flex: 0 0 auto;
            width: 25%
        }

        .col-4 {
            flex: 0 0 auto;
            width: 33.33333333%
        }

        .col-5 {
            flex: 0 0 auto;
            width: 41.66666667%
        }

        .col-6 {
            flex: 0 0 auto;
            width: 50%
        }

        .col-7 {
            flex: 0 0 auto;
            width: 58.33333333%
        }

        .col-8 {
            flex: 0 0 auto;
            width: 66.66666667%
        }

        .col-9 {
            flex: 0 0 auto;
            width: 75%
        }

        .col-10 {
            flex: 0 0 auto;
            width: 83.33333333%
        }

        .col-11 {
            flex: 0 0 auto;
            width: 91.66666667%
        }

        .col-12 {
            flex: 0 0 auto;
            width: 100%
        }

        .offset-1 {
            margin-left: 8.33333333%
        }

        .offset-2 {
            margin-left: 16.66666667%
        }

        .offset-3 {
            margin-left: 25%
        }

        .offset-4 {
            margin-left: 33.33333333%
        }

        .offset-5 {
            margin-left: 41.66666667%
        }

        .offset-6 {
            margin-left: 50%
        }

        .offset-7 {
            margin-left: 58.33333333%
        }

        .offset-8 {
            margin-left: 66.66666667%
        }

        .offset-9 {
            margin-left: 75%
        }

        .offset-10 {
            margin-left: 83.33333333%
        }

        .offset-11 {
            margin-left: 91.66666667%
        }

        .g-0,
        .gx-0 {
            --bs-gutter-x: 0
        }

        .g-0,
        .gy-0 {
            --bs-gutter-y: 0
        }

        .g-1,
        .gx-1 {
            --bs-gutter-x: 0.25rem
        }

        .g-1,
        .gy-1 {
            --bs-gutter-y: 0.25rem
        }

        .g-2,
        .gx-2 {
            --bs-gutter-x: 0.5rem
        }

        .g-2,
        .gy-2 {
            --bs-gutter-y: 0.5rem
        }

        .g-3,
        .gx-3 {
            --bs-gutter-x: 1rem
        }

        .g-3,
        .gy-3 {
            --bs-gutter-y: 1rem
        }

        .g-4,
        .gx-4 {
            --bs-gutter-x: 1.5rem
        }

        .g-4,
        .gy-4 {
            --bs-gutter-y: 1.5rem
        }

        .g-5,
        .gx-5 {
            --bs-gutter-x: 3rem
        }

        .g-5,
        .gy-5 {
            --bs-gutter-y: 3rem
        }

        @media (min-width:576px) {
            .col-sm-auto {
                flex: 0 0 auto;
                width: auto
            }

            .col-sm-1 {
                flex: 0 0 auto;
                width: 8.33333333%
            }

            .col-sm-2 {
                flex: 0 0 auto;
                width: 16.66666667%
            }

            .col-sm-3 {
                flex: 0 0 auto;
                width: 25%
            }

            .col-sm-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-sm-5 {
                flex: 0 0 auto;
                width: 41.66666667%
            }

            .col-sm-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .col-sm-7 {
                flex: 0 0 auto;
                width: 58.33333333%
            }

            .col-sm-8 {
                flex: 0 0 auto;
                width: 66.66666667%
            }

            .col-sm-9 {
                flex: 0 0 auto;
                width: 75%
            }

            .col-sm-10 {
                flex: 0 0 auto;
                width: 83.33333333%
            }

            .col-sm-11 {
                flex: 0 0 auto;
                width: 91.66666667%
            }

            .col-sm-12 {
                flex: 0 0 auto;
                width: 100%
            }

            .offset-sm-0 {
                margin-left: 0
            }

            .offset-sm-1 {
                margin-left: 8.33333333%
            }

            .offset-sm-2 {
                margin-left: 16.66666667%
            }

            .offset-sm-3 {
                margin-left: 25%
            }

            .offset-sm-4 {
                margin-left: 33.33333333%
            }

            .offset-sm-5 {
                margin-left: 41.66666667%
            }

            .offset-sm-6 {
                margin-left: 50%
            }

            .offset-sm-7 {
                margin-left: 58.33333333%
            }

            .offset-sm-8 {
                margin-left: 66.66666667%
            }

            .offset-sm-9 {
                margin-left: 75%
            }

            .offset-sm-10 {
                margin-left: 83.33333333%
            }

            .offset-sm-11 {
                margin-left: 91.66666667%
            }

            .g-sm-0,
            .gx-sm-0 {
                --bs-gutter-x: 0
            }

            .g-sm-0,
            .gy-sm-0 {
                --bs-gutter-y: 0
            }

            .g-sm-1,
            .gx-sm-1 {
                --bs-gutter-x: 0.25rem
            }

            .g-sm-1,
            .gy-sm-1 {
                --bs-gutter-y: 0.25rem
            }

            .g-sm-2,
            .gx-sm-2 {
                --bs-gutter-x: 0.5rem
            }

            .g-sm-2,
            .gy-sm-2 {
                --bs-gutter-y: 0.5rem
            }

            .g-sm-3,
            .gx-sm-3 {
                --bs-gutter-x: 1rem
            }

            .g-sm-3,
            .gy-sm-3 {
                --bs-gutter-y: 1rem
            }

            .g-sm-4,
            .gx-sm-4 {
                --bs-gutter-x: 1.5rem
            }

            .g-sm-4,
            .gy-sm-4 {
                --bs-gutter-y: 1.5rem
            }

            .g-sm-5,
            .gx-sm-5 {
                --bs-gutter-x: 3rem
            }

            .g-sm-5,
            .gy-sm-5 {
                --bs-gutter-y: 3rem
            }
        }

        @media (min-width:768px) {
            .col-md-auto {
                flex: 0 0 auto;
                width: auto
            }

            .col-md-1 {
                flex: 0 0 auto;
                width: 8.33333333%
            }

            .col-md-2 {
                flex: 0 0 auto;
                width: 16.66666667%
            }

            .col-md-3 {
                flex: 0 0 auto;
                width: 25%
            }

            .col-md-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-md-5 {
                flex: 0 0 auto;
                width: 41.66666667%
            }

            .col-md-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .col-md-7 {
                flex: 0 0 auto;
                width: 58.33333333%
            }

            .col-md-8 {
                flex: 0 0 auto;
                width: 66.66666667%
            }

            .col-md-9 {
                flex: 0 0 auto;
                width: 75%
            }

            .col-md-10 {
                flex: 0 0 auto;
                width: 83.33333333%
            }

            .col-md-11 {
                flex: 0 0 auto;
                width: 91.66666667%
            }

            .col-md-12 {
                flex: 0 0 auto;
                width: 100%
            }

            .offset-md-0 {
                margin-left: 0
            }

            .offset-md-1 {
                margin-left: 8.33333333%
            }

            .offset-md-2 {
                margin-left: 16.66666667%
            }

            .offset-md-3 {
                margin-left: 25%
            }

            .offset-md-4 {
                margin-left: 33.33333333%
            }

            .offset-md-5 {
                margin-left: 41.66666667%
            }

            .offset-md-6 {
                margin-left: 50%
            }

            .offset-md-7 {
                margin-left: 58.33333333%
            }

            .offset-md-8 {
                margin-left: 66.66666667%
            }

            .offset-md-9 {
                margin-left: 75%
            }

            .offset-md-10 {
                margin-left: 83.33333333%
            }

            .offset-md-11 {
                margin-left: 91.66666667%
            }

            .g-md-0,
            .gx-md-0 {
                --bs-gutter-x: 0
            }

            .g-md-0,
            .gy-md-0 {
                --bs-gutter-y: 0
            }

            .g-md-1,
            .gx-md-1 {
                --bs-gutter-x: 0.25rem
            }

            .g-md-1,
            .gy-md-1 {
                --bs-gutter-y: 0.25rem
            }

            .g-md-2,
            .gx-md-2 {
                --bs-gutter-x: 0.5rem
            }

            .g-md-2,
            .gy-md-2 {
                --bs-gutter-y: 0.5rem
            }

            .g-md-3,
            .gx-md-3 {
                --bs-gutter-x: 1rem
            }

            .g-md-3,
            .gy-md-3 {
                --bs-gutter-y: 1rem
            }

            .g-md-4,
            .gx-md-4 {
                --bs-gutter-x: 1.5rem
            }

            .g-md-4,
            .gy-md-4 {
                --bs-gutter-y: 1.5rem
            }

            .g-md-5,
            .gx-md-5 {
                --bs-gutter-x: 3rem
            }

            .g-md-5,
            .gy-md-5 {
                --bs-gutter-y: 3rem
            }
        }

        @media (min-width:992px) {
            .col-lg-auto {
                flex: 0 0 auto;
                width: auto
            }

            .col-lg-1 {
                flex: 0 0 auto;
                width: 8.33333333%
            }

            .col-lg-2 {
                flex: 0 0 auto;
                width: 16.66666667%
            }

            .col-lg-3 {
                flex: 0 0 auto;
                width: 25%
            }

            .col-lg-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-lg-5 {
                flex: 0 0 auto;
                width: 41.66666667%
            }

            .col-lg-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .col-lg-7 {
                flex: 0 0 auto;
                width: 58.33333333%
            }

            .col-lg-8 {
                flex: 0 0 auto;
                width: 66.66666667%
            }

            .col-lg-9 {
                flex: 0 0 auto;
                width: 75%
            }

            .col-lg-10 {
                flex: 0 0 auto;
                width: 83.33333333%
            }

            .col-lg-11 {
                flex: 0 0 auto;
                width: 91.66666667%
            }

            .col-lg-12 {
                flex: 0 0 auto;
                width: 100%
            }

            .offset-lg-0 {
                margin-left: 0
            }

            .offset-lg-1 {
                margin-left: 8.33333333%
            }

            .offset-lg-2 {
                margin-left: 16.66666667%
            }

            .offset-lg-3 {
                margin-left: 25%
            }

            .offset-lg-4 {
                margin-left: 33.33333333%
            }

            .offset-lg-5 {
                margin-left: 41.66666667%
            }

            .offset-lg-6 {
                margin-left: 50%
            }

            .offset-lg-7 {
                margin-left: 58.33333333%
            }

            .offset-lg-8 {
                margin-left: 66.66666667%
            }

            .offset-lg-9 {
                margin-left: 75%
            }

            .offset-lg-10 {
                margin-left: 83.33333333%
            }

            .offset-lg-11 {
                margin-left: 91.66666667%
            }

            .g-lg-0,
            .gx-lg-0 {
                --bs-gutter-x: 0
            }

            .g-lg-0,
            .gy-lg-0 {
                --bs-gutter-y: 0
            }

            .g-lg-1,
            .gx-lg-1 {
                --bs-gutter-x: 0.25rem
            }

            .g-lg-1,
            .gy-lg-1 {
                --bs-gutter-y: 0.25rem
            }

            .g-lg-2,
            .gx-lg-2 {
                --bs-gutter-x: 0.5rem
            }

            .g-lg-2,
            .gy-lg-2 {
                --bs-gutter-y: 0.5rem
            }

            .g-lg-3,
            .gx-lg-3 {
                --bs-gutter-x: 1rem
            }

            .g-lg-3,
            .gy-lg-3 {
                --bs-gutter-y: 1rem
            }

            .g-lg-4,
            .gx-lg-4 {
                --bs-gutter-x: 1.5rem
            }

            .g-lg-4,
            .gy-lg-4 {
                --bs-gutter-y: 1.5rem
            }

            .g-lg-5,
            .gx-lg-5 {
                --bs-gutter-x: 3rem
            }

            .g-lg-5,
            .gy-lg-5 {
                --bs-gutter-y: 3rem
            }
        }

        @media (min-width:1200px) {
            .col-xl-auto {
                flex: 0 0 auto;
                width: auto
            }

            .col-xl-1 {
                flex: 0 0 auto;
                width: 8.33333333%
            }

            .col-xl-2 {
                flex: 0 0 auto;
                width: 16.66666667%
            }

            .col-xl-3 {
                flex: 0 0 auto;
                width: 25%
            }

            .col-xl-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-xl-5 {
                flex: 0 0 auto;
                width: 41.66666667%
            }

            .col-xl-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .col-xl-7 {
                flex: 0 0 auto;
                width: 58.33333333%
            }

            .col-xl-8 {
                flex: 0 0 auto;
                width: 66.66666667%
            }

            .col-xl-9 {
                flex: 0 0 auto;
                width: 75%
            }

            .col-xl-10 {
                flex: 0 0 auto;
                width: 83.33333333%
            }

            .col-xl-11 {
                flex: 0 0 auto;
                width: 91.66666667%
            }

            .col-xl-12 {
                flex: 0 0 auto;
                width: 100%
            }

            .offset-xl-0 {
                margin-left: 0
            }

            .offset-xl-1 {
                margin-left: 8.33333333%
            }

            .offset-xl-2 {
                margin-left: 16.66666667%
            }

            .offset-xl-3 {
                margin-left: 25%
            }

            .offset-xl-4 {
                margin-left: 33.33333333%
            }

            .offset-xl-5 {
                margin-left: 41.66666667%
            }

            .offset-xl-6 {
                margin-left: 50%
            }

            .offset-xl-7 {
                margin-left: 58.33333333%
            }

            .offset-xl-8 {
                margin-left: 66.66666667%
            }

            .offset-xl-9 {
                margin-left: 75%
            }

            .offset-xl-10 {
                margin-left: 83.33333333%
            }

            .offset-xl-11 {
                margin-left: 91.66666667%
            }

            .g-xl-0,
            .gx-xl-0 {
                --bs-gutter-x: 0
            }

            .g-xl-0,
            .gy-xl-0 {
                --bs-gutter-y: 0
            }

            .g-xl-1,
            .gx-xl-1 {
                --bs-gutter-x: 0.25rem
            }

            .g-xl-1,
            .gy-xl-1 {
                --bs-gutter-y: 0.25rem
            }

            .g-xl-2,
            .gx-xl-2 {
                --bs-gutter-x: 0.5rem
            }

            .g-xl-2,
            .gy-xl-2 {
                --bs-gutter-y: 0.5rem
            }

            .g-xl-3,
            .gx-xl-3 {
                --bs-gutter-x: 1rem
            }

            .g-xl-3,
            .gy-xl-3 {
                --bs-gutter-y: 1rem
            }

            .g-xl-4,
            .gx-xl-4 {
                --bs-gutter-x: 1.5rem
            }

            .g-xl-4,
            .gy-xl-4 {
                --bs-gutter-y: 1.5rem
            }

            .g-xl-5,
            .gx-xl-5 {
                --bs-gutter-x: 3rem
            }

            .g-xl-5,
            .gy-xl-5 {
                --bs-gutter-y: 3rem
            }
        }

        @media (min-width:1400px) {
            .col-xxl-auto {
                flex: 0 0 auto;
                width: auto
            }

            .col-xxl-1 {
                flex: 0 0 auto;
                width: 8.33333333%
            }

            .col-xxl-2 {
                flex: 0 0 auto;
                width: 16.66666667%
            }

            .col-xxl-3 {
                flex: 0 0 auto;
                width: 25%
            }

            .col-xxl-4 {
                flex: 0 0 auto;
                width: 33.33333333%
            }

            .col-xxl-5 {
                flex: 0 0 auto;
                width: 41.66666667%
            }

            .col-xxl-6 {
                flex: 0 0 auto;
                width: 50%
            }

            .col-xxl-7 {
                flex: 0 0 auto;
                width: 58.33333333%
            }

            .col-xxl-8 {
                flex: 0 0 auto;
                width: 66.66666667%
            }

            .col-xxl-9 {
                flex: 0 0 auto;
                width: 75%
            }

            .col-xxl-10 {
                flex: 0 0 auto;
                width: 83.33333333%
            }

            .col-xxl-11 {
                flex: 0 0 auto;
                width: 91.66666667%
            }

            .col-xxl-12 {
                flex: 0 0 auto;
                width: 100%
            }

            .offset-xxl-0 {
                margin-left: 0
            }

            .offset-xxl-1 {
                margin-left: 8.33333333%
            }

            .offset-xxl-2 {
                margin-left: 16.66666667%
            }

            .offset-xxl-3 {
                margin-left: 25%
            }

            .offset-xxl-4 {
                margin-left: 33.33333333%
            }

            .offset-xxl-5 {
                margin-left: 41.66666667%
            }

            .offset-xxl-6 {
                margin-left: 50%
            }

            .offset-xxl-7 {
                margin-left: 58.33333333%
            }

            .offset-xxl-8 {
                margin-left: 66.66666667%
            }

            .offset-xxl-9 {
                margin-left: 75%
            }

            .offset-xxl-10 {
                margin-left: 83.33333333%
            }

            .offset-xxl-11 {
                margin-left: 91.66666667%
            }

            .g-xxl-0,
            .gx-xxl-0 {
                --bs-gutter-x: 0
            }

            .g-xxl-0,
            .gy-xxl-0 {
                --bs-gutter-y: 0
            }

            .g-xxl-1,
            .gx-xxl-1 {
                --bs-gutter-x: 0.25rem
            }

            .g-xxl-1,
            .gy-xxl-1 {
                --bs-gutter-y: 0.25rem
            }

            .g-xxl-2,
            .gx-xxl-2 {
                --bs-gutter-x: 0.5rem
            }

            .g-xxl-2,
            .gy-xxl-2 {
                --bs-gutter-y: 0.5rem
            }

            .g-xxl-3,
            .gx-xxl-3 {
                --bs-gutter-x: 1rem
            }

            .g-xxl-3,
            .gy-xxl-3 {
                --bs-gutter-y: 1rem
            }

            .g-xxl-4,
            .gx-xxl-4 {
                --bs-gutter-x: 1.5rem
            }

            .g-xxl-4,
            .gy-xxl-4 {
                --bs-gutter-y: 1.5rem
            }

            .g-xxl-5,
            .gx-xxl-5 {
                --bs-gutter-x: 3rem
            }

            .g-xxl-5,
            .gy-xxl-5 {
                --bs-gutter-y: 3rem
            }
        }

        .table {
            --bs-table-bg: transparent;
            --bs-table-accent-bg: transparent;
            --bs-table-striped-color: #607080;
            --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
            --bs-table-active-color: #607080;
            --bs-table-active-bg: rgba(0, 0, 0, 0.1);
            --bs-table-hover-color: #607080;
            --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
            border-color: #eee;
            color: #607080;
            margin-bottom: 1rem;
            vertical-align: top;
            width: 100%
        }

        .table>:not(caption)>*>* {
            background-color: var(--bs-table-bg);
            border-bottom-width: 1px;
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
            padding: .5rem
        }

        .table>tbody {
            vertical-align: inherit
        }

        .table>thead {
            vertical-align: bottom
        }

        .table>:not(:last-child)>:last-child>* {
            border-bottom-color: currentColor
        }

        .caption-top {
            caption-side: top
        }

        .table-sm>:not(caption)>*>* {
            padding: .25rem
        }

        .table-bordered>:not(caption)>* {
            border-width: 1px 0
        }

        .table-bordered>:not(caption)>*>* {
            border-width: 0 1px
        }

        .table-borderless>:not(caption)>*>* {
            border-bottom-width: 0
        }

        .table-striped>tbody>tr:nth-of-type(odd) {
            --bs-table-accent-bg: var(--bs-table-striped-bg);
            color: var(--bs-table-striped-color)
        }

        .table-active {
            --bs-table-accent-bg: var(--bs-table-active-bg);
            color: var(--bs-table-active-color)
        }

        .table-hover>tbody>tr:hover {
            --bs-table-accent-bg: var(--bs-table-hover-bg);
            color: var(--bs-table-hover-color)
        }

        .table-primary {
            --bs-table-bg: #d9dff2;
            --bs-table-striped-bg: #ced4e6;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #c3c9da;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #c9cee0;
            --bs-table-hover-color: #000;
            border-color: #c3c9da;
            color: #000
        }

        .table-secondary {
            --bs-table-bg: #e2e3e5;
            --bs-table-striped-bg: #d7d8da;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #cbccce;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #d1d2d4;
            --bs-table-hover-color: #000;
            border-color: #cbccce;
            color: #000
        }

        .table-success {
            --bs-table-bg: #d1e7dd;
            --bs-table-striped-bg: #c7dbd2;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #bcd0c7;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #c1d6cc;
            --bs-table-hover-color: #000;
            border-color: #bcd0c7;
            color: #000
        }

        .table-info {
            --bs-table-bg: #cff4fc;
            --bs-table-striped-bg: #c5e8ef;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #badce3;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #bfe2e9;
            --bs-table-hover-color: #000;
            border-color: #badce3;
            color: #000
        }

        .table-warning {
            --bs-table-bg: #fff3cd;
            --bs-table-striped-bg: #f2e7c3;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #e6dbb9;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #ece1be;
            --bs-table-hover-color: #000;
            border-color: #e6dbb9;
            color: #000
        }

        .table-danger {
            --bs-table-bg: #f8d7da;
            --bs-table-striped-bg: #eccccf;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #dfc2c4;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #e5c7ca;
            --bs-table-hover-color: #000;
            border-color: #dfc2c4;
            color: #000
        }

        .table-light {
            --bs-table-bg: #f8f9fa;
            --bs-table-striped-bg: #ecedee;
            --bs-table-striped-color: #000;
            --bs-table-active-bg: #dfe0e1;
            --bs-table-active-color: #000;
            --bs-table-hover-bg: #e5e6e7;
            --bs-table-hover-color: #000;
            border-color: #dfe0e1;
            color: #000
        }

        .table-dark {
            --bs-table-bg: #212529;
            --bs-table-striped-bg: #2c3034;
            --bs-table-striped-color: #fff;
            --bs-table-active-bg: #373b3e;
            --bs-table-active-color: #fff;
            --bs-table-hover-bg: #323539;
            --bs-table-hover-color: #fff;
            border-color: #373b3e;
            color: #fff
        }

        .table-responsive {
            -webkit-overflow-scrolling: touch;
            overflow-x: auto
        }

        @media (max-width:575.98px) {
            .table-responsive-sm {
                -webkit-overflow-scrolling: touch;
                overflow-x: auto
            }
        }

        @media (max-width:767.98px) {
            .table-responsive-md {
                -webkit-overflow-scrolling: touch;
                overflow-x: auto
            }
        }

        @media (max-width:991.98px) {
            .table-responsive-lg {
                -webkit-overflow-scrolling: touch;
                overflow-x: auto
            }
        }

        @media (max-width:1199.98px) {
            .table-responsive-xl {
                -webkit-overflow-scrolling: touch;
                overflow-x: auto
            }
        }

        @media (max-width:1399.98px) {
            .table-responsive-xxl {
                -webkit-overflow-scrolling: touch;
                overflow-x: auto
            }
        }

        .form-label {
            margin-bottom: .5rem
        }

        .col-form-label {
            font-size: inherit;
            line-height: 1.5;
            margin-bottom: 0;
            padding-bottom: calc(.375rem + 1px);
            padding-top: calc(.375rem + 1px)
        }

        .col-form-label-lg {
            font-size: 1.25rem;
            padding-bottom: calc(.5rem + 1px);
            padding-top: calc(.5rem + 1px)
        }

        .col-form-label-sm {
            font-size: .875rem;
            padding-bottom: calc(.25rem + 1px);
            padding-top: calc(.25rem + 1px)
        }

        .form-text {
            color: #7c8db5;
            font-size: .875em;
            margin-top: .25rem
        }

        .form-control {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-clip: padding-box;
            background-color: #fff;
            border: 1px solid #dce7f1;
            border-radius: .25rem;
            color: #607080;
            display: block;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            padding: .375rem .75rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            width: 100%
        }

        @media (prefers-reduced-motion:reduce) {
            .form-control {
                transition: none
            }
        }

        .form-control[type=file] {
            overflow: hidden
        }

        .form-control[type=file]:not(:disabled):not([readonly]) {
            cursor: pointer
        }

        .form-control:focus {
            background-color: #fff;
            border-color: #a1afdf;
            box-shadow: 0 0 0 .25rem rgba(67, 94, 190, .25);
            color: #607080;
            outline: 0
        }

        .form-control::-webkit-date-and-time-value {
            height: 1.5em
        }

        .form-control::-moz-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control:-ms-input-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control::placeholder {
            color: #6c757d;
            opacity: 1
        }

        .form-control:disabled,
        .form-control[readonly] {
            background-color: #e9ecef;
            opacity: 1
        }

        .form-control::file-selector-button {
            -webkit-margin-end: .75rem;
            background-color: #e6eef5;
            border: 0 solid;
            border-color: inherit;
            border-inline-end-width: 1px;
            border-radius: 0;
            color: #607080;
            margin: -.375rem -.75rem;
            margin-inline-end: .75rem;
            padding: .375rem .75rem;
            pointer-events: none;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .form-control::file-selector-button {
                transition: none
            }
        }

        .form-control:hover:not(:disabled):not([readonly])::file-selector-button {
            background-color: #dbe2e9
        }

        .form-control::-webkit-file-upload-button {
            -webkit-margin-end: .75rem;
            background-color: #e6eef5;
            border: 0 solid;
            border-color: inherit;
            border-inline-end-width: 1px;
            border-radius: 0;
            color: #607080;
            margin: -.375rem -.75rem;
            margin-inline-end: .75rem;
            padding: .375rem .75rem;
            pointer-events: none;
            -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .form-control::-webkit-file-upload-button {
                -webkit-transition: none;
                transition: none
            }
        }

        .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
            background-color: #dbe2e9
        }

        .form-control-plaintext {
            background-color: transparent;
            border: solid transparent;
            border-width: 1px 0;
            color: #607080;
            display: block;
            line-height: 1.5;
            margin-bottom: 0;
            padding: .375rem 0;
            width: 100%
        }

        .form-control-plaintext.form-control-lg,
        .form-control-plaintext.form-control-sm {
            padding-left: 0;
            padding-right: 0
        }

        .form-control-sm {
            border-radius: .2rem;
            font-size: .875rem;
            min-height: calc(1.5em + .5rem + 2px);
            padding: .25rem .5rem
        }

        .form-control-sm::file-selector-button {
            -webkit-margin-end: .5rem;
            margin: -.25rem -.5rem;
            margin-inline-end: .5rem;
            padding: .25rem .5rem
        }

        .form-control-sm::-webkit-file-upload-button {
            -webkit-margin-end: .5rem;
            margin: -.25rem -.5rem;
            margin-inline-end: .5rem;
            padding: .25rem .5rem
        }

        .form-control-lg {
            border-radius: .3rem;
            font-size: 1.25rem;
            min-height: calc(1.5em + 1rem + 2px);
            padding: .5rem 1rem
        }

        .form-control-lg::file-selector-button {
            -webkit-margin-end: 1rem;
            margin: -.5rem -1rem;
            margin-inline-end: 1rem;
            padding: .5rem 1rem
        }

        .form-control-lg::-webkit-file-upload-button {
            -webkit-margin-end: 1rem;
            margin: -.5rem -1rem;
            margin-inline-end: 1rem;
            padding: .5rem 1rem
        }

        textarea.form-control {
            min-height: calc(1.5em + .75rem + 2px)
        }

        textarea.form-control-sm {
            min-height: calc(1.5em + .5rem + 2px)
        }

        textarea.form-control-lg {
            min-height: calc(1.5em + 1rem + 2px)
        }

        .form-control-color {
            height: auto;
            max-width: 3rem;
            padding: .375rem
        }

        .form-control-color:not(:disabled):not([readonly]) {
            cursor: pointer
        }

        .form-control-color::-moz-color-swatch {
            border-radius: .25rem;
            height: 1.5em
        }

        .form-control-color::-webkit-color-swatch {
            border-radius: .25rem;
            height: 1.5em
        }

        .form-select {
            -moz-padding-start: calc(.75rem - 3px);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: #fff;
            background-image: url("data:image/svg+xml;charset=utf-8, %3Csvg xmlns='http://www.w3.org/2000/svg'viewBox='0 0 16 16'%3E%3Cpath fill='none'stroke='%23343a40'stroke-linecap='round'stroke-linejoin='round'stroke-width='2'd='m2 5 6 6 6-6'/%3E%3C/svg%3E");
            background-position: right .75rem center;
            background-repeat: no-repeat;
            background-size: 16px 12px;
            border: 1px solid #dce7f1;
            border-radius: .25rem;
            color: #607080;
            display: block;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            padding: .375rem 1.75rem .375rem .75rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            width: 100%
        }

        @media (prefers-reduced-motion:reduce) {
            .form-select {
                transition: none
            }
        }

        .form-select:focus {
            border-color: #a1afdf;
            box-shadow: 0 0 0 .25rem rgba(67, 94, 190, .25);
            outline: 0
        }

        .form-select[multiple],
        .form-select[size]:not([size="1"]) {
            background-image: none;
            padding-right: .75rem
        }

        .form-select:disabled {
            background-color: #e9ecef;
            color: #6c757d
        }

        .form-select:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #607080
        }

        .form-select-sm {
            font-size: .875rem;
            padding-bottom: .25rem;
            padding-left: .5rem;
            padding-top: .25rem
        }

        .form-select-lg {
            font-size: 1.25rem;
            padding-bottom: .5rem;
            padding-left: 1rem;
            padding-top: .5rem
        }

        .form-check {
            display: block;
            margin-bottom: .125rem;
            min-height: 1.5rem;
            padding-left: 1.7em
        }

        .form-check .form-check-input {
            float: left;
            margin-left: -1.7em
        }

        .form-check-input {
            -webkit-print-color-adjust: exact;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: #fff;
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: contain;
            border: 3px solid #e1e3ea;
            color-adjust: exact;
            height: 1.2em;
            margin-top: .15em;
            transition: background-color .15s ease-in-out, background-position .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            vertical-align: top;
            width: 1.2em
        }

        @media (prefers-reduced-motion:reduce) {
            .form-check-input {
                transition: none
            }
        }

        .form-check-input[type=checkbox] {
            border-radius: .3em
        }

        .form-check-input[type=radio] {
            border-radius: 50%
        }

        .form-check-input:active {
            filter: brightness(90%)
        }

        .form-check-input:focus {
            border-color: #a1afdf;
            box-shadow: 0 0 0 .25rem rgba(67, 94, 190, .25);
            outline: 0
        }

        .form-check-input:checked {
            background-color: #435ebe;
            border-color: #435ebe
        }

        .form-check-input:checked[type=checkbox] {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3E%3Cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/%3E%3C/svg%3E")
        }

        .form-check-input:checked[type=radio] {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='2' fill='%23fff'/%3E%3C/svg%3E")
        }

        .form-check-input[type=checkbox]:indeterminate {
            background-color: #435ebe;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3E%3Cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3E%3C/svg%3E");
            border-color: #435ebe
        }

        .form-check-input:disabled {
            filter: none;
            opacity: .5;
            pointer-events: none
        }

        .form-check-input:disabled~.form-check-label,
        .form-check-input[disabled]~.form-check-label {
            opacity: .5
        }

        .form-switch {
            padding-left: 2.5em
        }

        .form-switch .form-check-input {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='rgba(0, 0, 0, 0.25)'/%3E%3C/svg%3E");
            background-position: 0;
            border-radius: 2em;
            margin-left: -2.5em;
            transition: background-position .15s ease-in-out;
            width: 2em
        }

        @media (prefers-reduced-motion:reduce) {
            .form-switch .form-check-input {
                transition: none
            }
        }

        .form-switch .form-check-input:focus {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23a1afdf'/%3E%3C/svg%3E")
        }

        .form-switch .form-check-input:checked {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E");
            background-position: 100%
        }

        .form-check-inline {
            display: inline-block;
            margin-right: 1rem
        }

        .btn-check {
            clip: rect(0, 0, 0, 0);
            pointer-events: none;
            position: absolute
        }

        .btn-check:disabled+.btn,
        .btn-check[disabled]+.btn {
            filter: none;
            opacity: .65;
            pointer-events: none
        }

        .form-range {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: transparent;
            height: 1.5rem;
            padding: 0;
            width: 100%
        }

        .form-range:focus {
            outline: 0
        }

        .form-range:focus::-webkit-slider-thumb {
            box-shadow: 0 0 0 1px #f2f7ff, 0 0 0 .25rem rgba(67, 94, 190, .25)
        }

        .form-range:focus::-moz-range-thumb {
            box-shadow: 0 0 0 1px #f2f7ff, 0 0 0 .25rem rgba(67, 94, 190, .25)
        }

        .form-range::-moz-focus-outer {
            border: 0
        }

        .form-range::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            background-color: #435ebe;
            border: 0;
            border-radius: 1rem;
            height: 1rem;
            margin-top: -.25rem;
            -webkit-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            width: 1rem
        }

        @media (prefers-reduced-motion:reduce) {
            .form-range::-webkit-slider-thumb {
                -webkit-transition: none;
                transition: none
            }
        }

        .form-range::-webkit-slider-thumb:active {
            background-color: #c7cfec
        }

        .form-range::-webkit-slider-runnable-track {
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem;
            color: transparent;
            cursor: pointer;
            height: .5rem;
            width: 100%
        }

        .form-range::-moz-range-thumb {
            -moz-appearance: none;
            appearance: none;
            background-color: #435ebe;
            border: 0;
            border-radius: 1rem;
            height: 1rem;
            -moz-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            width: 1rem
        }

        @media (prefers-reduced-motion:reduce) {
            .form-range::-moz-range-thumb {
                -moz-transition: none;
                transition: none
            }
        }

        .form-range::-moz-range-thumb:active {
            background-color: #c7cfec
        }

        .form-range::-moz-range-track {
            background-color: #dee2e6;
            border-color: transparent;
            border-radius: 1rem;
            color: transparent;
            cursor: pointer;
            height: .5rem;
            width: 100%
        }

        .form-range:disabled {
            pointer-events: none
        }

        .form-range:disabled::-webkit-slider-thumb {
            background-color: #adb5bd
        }

        .form-range:disabled::-moz-range-thumb {
            background-color: #adb5bd
        }

        .form-floating {
            position: relative
        }

        .form-floating>.form-control,
        .form-floating>.form-select {
            height: calc(3.5rem + 2px);
            line-height: 1.25
        }

        .form-floating>label {
            border: 1px solid transparent;
            height: 100%;
            left: 0;
            padding: 1rem .75rem;
            pointer-events: none;
            position: absolute;
            top: 0;
            transform-origin: 0 0;
            transition: opacity .1s ease-in-out, transform .1s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .form-floating>label {
                transition: none
            }
        }

        .form-floating>.form-control {
            padding: 1rem .75rem
        }

        .form-floating>.form-control::-moz-placeholder {
            color: transparent
        }

        .form-floating>.form-control:-ms-input-placeholder {
            color: transparent
        }

        .form-floating>.form-control::placeholder {
            color: transparent
        }

        .form-floating>.form-control:not(:-moz-placeholder-shown) {
            padding-bottom: .625rem;
            padding-top: 1.625rem
        }

        .form-floating>.form-control:not(:-ms-input-placeholder) {
            padding-bottom: .625rem;
            padding-top: 1.625rem
        }

        .form-floating>.form-control:focus,
        .form-floating>.form-control:not(:placeholder-shown) {
            padding-bottom: .625rem;
            padding-top: 1.625rem
        }

        .form-floating>.form-control:-webkit-autofill {
            padding-bottom: .625rem;
            padding-top: 1.625rem
        }

        .form-floating>.form-select {
            padding-bottom: .625rem;
            padding-top: 1.625rem
        }

        .form-floating>.form-control:not(:-moz-placeholder-shown)~label {
            opacity: .65;
            transform: scale(.85) translateY(-.5rem) translateX(.15rem)
        }

        .form-floating>.form-control:not(:-ms-input-placeholder)~label {
            opacity: .65;
            transform: scale(.85) translateY(-.5rem) translateX(.15rem)
        }

        .form-floating>.form-control:focus~label,
        .form-floating>.form-control:not(:placeholder-shown)~label,
        .form-floating>.form-select~label {
            opacity: .65;
            transform: scale(.85) translateY(-.5rem) translateX(.15rem)
        }

        .form-floating>.form-control:-webkit-autofill~label {
            opacity: .65;
            transform: scale(.85) translateY(-.5rem) translateX(.15rem)
        }

        .input-group {
            align-items: stretch;
            display: flex;
            flex-wrap: wrap;
            position: relative;
            width: 100%
        }

        .input-group>.form-control,
        .input-group>.form-select {
            flex: 1 1 auto;
            min-width: 0;
            position: relative;
            width: 1%
        }

        .input-group>.form-control:focus,
        .input-group>.form-select:focus {
            z-index: 3
        }

        .input-group .btn {
            position: relative;
            z-index: 2
        }

        .input-group .btn:focus {
            z-index: 3
        }

        .input-group-text {
            align-items: center;
            background-color: #e6eef5;
            border: 1px solid #dce7f1;
            border-radius: .25rem;
            color: #526e8a;
            display: flex;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            padding: .375rem .75rem;
            text-align: center;
            white-space: nowrap
        }

        .input-group-lg>.btn,
        .input-group-lg>.form-control,
        .input-group-lg>.form-select,
        .input-group-lg>.input-group-text {
            border-radius: .3rem;
            font-size: 1.25rem;
            padding: .5rem 1rem
        }

        .input-group-sm>.btn,
        .input-group-sm>.form-control,
        .input-group-sm>.form-select,
        .input-group-sm>.input-group-text {
            border-radius: .2rem;
            font-size: .875rem;
            padding: .25rem .5rem
        }

        .input-group-lg>.form-select,
        .input-group-sm>.form-select {
            padding-right: 2.5rem
        }

        .input-group.has-validation>.dropdown-toggle:nth-last-child(n+4),
        .input-group.has-validation>:nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu),
        .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),
        .input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu) {
            border-bottom-right-radius: 0;
            border-top-right-radius: 0
        }

        .input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
            margin-left: -1px
        }

        .valid-feedback {
            color: #198754;
            display: none;
            font-size: .875em;
            margin-top: .25rem;
            width: 100%
        }

        .valid-tooltip {
            background-color: rgba(25, 135, 84, .9);
            border-radius: .25rem;
            color: #fff;
            display: none;
            font-size: .875rem;
            margin-top: .1rem;
            max-width: 100%;
            padding: .25rem .5rem;
            position: absolute;
            top: 100%;
            z-index: 5
        }

        .is-valid~.valid-feedback,
        .is-valid~.valid-tooltip,
        .was-validated :valid~.valid-feedback,
        .was-validated :valid~.valid-tooltip {
            display: block
        }

        .form-control.is-valid,
        .was-validated .form-control:valid {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23198754' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E");
            background-position: right calc(.375em + .1875rem) center;
            background-repeat: no-repeat;
            background-size: calc(.75em + .375rem) calc(.75em + .375rem);
            border-color: #198754;
            padding-right: calc(1.5em + .75rem)
        }

        .form-control.is-valid:focus,
        .was-validated .form-control:valid:focus {
            border-color: #198754;
            box-shadow: 0 0 0 .25rem rgba(25, 135, 84, .25)
        }

        .was-validated textarea.form-control:valid,
        textarea.form-control.is-valid {
            background-position: top calc(.375em + .1875rem) right calc(.375em + .1875rem);
            padding-right: calc(1.5em + .75rem)
        }

        .form-select.is-valid,
        .was-validated .form-select:valid {
            border-color: #198754
        }

        .form-select.is-valid:not([multiple]):not([size]),
        .form-select.is-valid:not([multiple])[size="1"],
        .was-validated .form-select:valid:not([multiple]):not([size]),
        .was-validated .form-select:valid:not([multiple])[size="1"] {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3E%3C/svg%3E"), url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23198754' d='M2.3 6.73.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E");
            background-position: right .75rem center, center right 2.5rem;
            background-size: 16px 12px, calc(.75em + .375rem) calc(.75em + .375rem);
            padding-right: calc(.75em + 3.0625rem)
        }

        .form-select.is-valid:focus,
        .was-validated .form-select:valid:focus {
            border-color: #198754;
            box-shadow: 0 0 0 .25rem rgba(25, 135, 84, .25)
        }

        .form-check-input.is-valid,
        .was-validated .form-check-input:valid {
            border-color: #198754
        }

        .form-check-input.is-valid:checked,
        .was-validated .form-check-input:valid:checked {
            background-color: #198754
        }

        .form-check-input.is-valid:focus,
        .was-validated .form-check-input:valid:focus {
            box-shadow: 0 0 0 .25rem rgba(25, 135, 84, .25)
        }

        .form-check-input.is-valid~.form-check-label,
        .was-validated .form-check-input:valid~.form-check-label {
            color: #198754
        }

        .form-check-inline .form-check-input~.valid-feedback {
            margin-left: .5em
        }

        .input-group .form-control.is-valid,
        .input-group .form-select.is-valid,
        .was-validated .input-group .form-control:valid,
        .was-validated .input-group .form-select:valid {
            z-index: 1
        }

        .input-group .form-control.is-valid:focus,
        .input-group .form-select.is-valid:focus,
        .was-validated .input-group .form-control:valid:focus,
        .was-validated .input-group .form-select:valid:focus {
            z-index: 3
        }

        .invalid-feedback {
            color: #dc3545;
            display: none;
            font-size: .875em;
            margin-top: .25rem;
            width: 100%
        }

        .invalid-tooltip {
            background-color: rgba(220, 53, 69, .9);
            border-radius: .25rem;
            color: #fff;
            display: none;
            font-size: .875rem;
            margin-top: .1rem;
            max-width: 100%;
            padding: .25rem .5rem;
            position: absolute;
            top: 100%;
            z-index: 5
        }

        .is-invalid~.invalid-feedback,
        .is-invalid~.invalid-tooltip,
        .was-validated :invalid~.invalid-feedback,
        .was-validated :invalid~.invalid-tooltip {
            display: block
        }

        .form-control.is-invalid,
        .was-validated .form-control:invalid {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545'%3E%3Ccircle cx='6' cy='6' r='4.5'/%3E%3Cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3E%3Ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3E%3C/svg%3E");
            background-position: right calc(.375em + .1875rem) center;
            background-repeat: no-repeat;
            background-size: calc(.75em + .375rem) calc(.75em + .375rem);
            border-color: #dc3545;
            padding-right: calc(1.5em + .75rem)
        }

        .form-control.is-invalid:focus,
        .was-validated .form-control:invalid:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 .25rem rgba(220, 53, 69, .25)
        }

        .was-validated textarea.form-control:invalid,
        textarea.form-control.is-invalid {
            background-position: top calc(.375em + .1875rem) right calc(.375em + .1875rem);
            padding-right: calc(1.5em + .75rem)
        }

        .form-select.is-invalid,
        .was-validated .form-select:invalid {
            border-color: #dc3545
        }

        .form-select.is-invalid:not([multiple]):not([size]),
        .form-select.is-invalid:not([multiple])[size="1"],
        .was-validated .form-select:invalid:not([multiple]):not([size]),
        .was-validated .form-select:invalid:not([multiple])[size="1"] {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3E%3C/svg%3E"), url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545'%3E%3Ccircle cx='6' cy='6' r='4.5'/%3E%3Cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3E%3Ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3E%3C/svg%3E");
            background-position: right .75rem center, center right 2.5rem;
            background-size: 16px 12px, calc(.75em + .375rem) calc(.75em + .375rem);
            padding-right: calc(.75em + 3.0625rem)
        }

        .form-select.is-invalid:focus,
        .was-validated .form-select:invalid:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 .25rem rgba(220, 53, 69, .25)
        }

        .form-check-input.is-invalid,
        .was-validated .form-check-input:invalid {
            border-color: #dc3545
        }

        .form-check-input.is-invalid:checked,
        .was-validated .form-check-input:invalid:checked {
            background-color: #dc3545
        }

        .form-check-input.is-invalid:focus,
        .was-validated .form-check-input:invalid:focus {
            box-shadow: 0 0 0 .25rem rgba(220, 53, 69, .25)
        }

        .form-check-input.is-invalid~.form-check-label,
        .was-validated .form-check-input:invalid~.form-check-label {
            color: #dc3545
        }

        .form-check-inline .form-check-input~.invalid-feedback {
            margin-left: .5em
        }

        .input-group .form-control.is-invalid,
        .input-group .form-select.is-invalid,
        .was-validated .input-group .form-control:invalid,
        .was-validated .input-group .form-select:invalid {
            z-index: 2
        }

        .input-group .form-control.is-invalid:focus,
        .input-group .form-select.is-invalid:focus,
        .was-validated .input-group .form-control:invalid:focus,
        .was-validated .input-group .form-select:invalid:focus {
            z-index: 3
        }

        .btn {
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: .25rem;
            color: #607080;
            cursor: pointer;
            display: inline-block;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            padding: .375rem .75rem;
            text-align: center;
            text-decoration: none;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            vertical-align: middle
        }

        @media (prefers-reduced-motion:reduce) {
            .btn {
                transition: none
            }
        }

        .btn:hover {
            color: #607080
        }

        .btn-check:focus+.btn,
        .btn:focus {
            box-shadow: 0 0 0 .25rem rgba(67, 94, 190, .25);
            outline: 0
        }

        .btn.disabled,
        .btn:disabled,
        fieldset:disabled .btn {
            opacity: .65;
            pointer-events: none
        }

        .btn-primary {
            background-color: #435ebe;
            border-color: #435ebe;
            color: #fff
        }

        .btn-check:focus+.btn-primary,
        .btn-primary:focus,
        .btn-primary:hover {
            background-color: #3950a2;
            border-color: #364b98;
            color: #fff
        }

        .btn-check:focus+.btn-primary,
        .btn-primary:focus {
            box-shadow: 0 0 0 .25rem rgba(95, 118, 200, .5)
        }

        .btn-check:active+.btn-primary,
        .btn-check:checked+.btn-primary,
        .btn-primary.active,
        .btn-primary:active,
        .show>.btn-primary.dropdown-toggle {
            background-color: #364b98;
            border-color: #32478f;
            color: #fff
        }

        .btn-check:active+.btn-primary:focus,
        .btn-check:checked+.btn-primary:focus,
        .btn-primary.active:focus,
        .btn-primary:active:focus,
        .show>.btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .25rem rgba(95, 118, 200, .5)
        }

        .btn-primary.disabled,
        .btn-primary:disabled {
            background-color: #435ebe;
            border-color: #435ebe;
            color: #fff
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            color: #fff
        }

        .btn-check:focus+.btn-secondary,
        .btn-secondary:focus,
        .btn-secondary:hover {
            background-color: #5c636a;
            border-color: #565e64;
            color: #fff
        }

        .btn-check:focus+.btn-secondary,
        .btn-secondary:focus {
            box-shadow: 0 0 0 .25rem hsla(208, 6%, 54%, .5)
        }

        .btn-check:active+.btn-secondary,
        .btn-check:checked+.btn-secondary,
        .btn-secondary.active,
        .btn-secondary:active,
        .show>.btn-secondary.dropdown-toggle {
            background-color: #565e64;
            border-color: #51585e;
            color: #fff
        }

        .btn-check:active+.btn-secondary:focus,
        .btn-check:checked+.btn-secondary:focus,
        .btn-secondary.active:focus,
        .btn-secondary:active:focus,
        .show>.btn-secondary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .25rem hsla(208, 6%, 54%, .5)
        }

        .btn-secondary.disabled,
        .btn-secondary:disabled {
            background-color: #6c757d;
            border-color: #6c757d;
            color: #fff
        }

        .btn-success {
            background-color: #198754;
            border-color: #198754;
            color: #fff
        }

        .btn-check:focus+.btn-success,
        .btn-success:focus,
        .btn-success:hover {
            background-color: #157347;
            border-color: #146c43;
            color: #fff
        }

        .btn-check:focus+.btn-success,
        .btn-success:focus {
            box-shadow: 0 0 0 .25rem rgba(60, 153, 110, .5)
        }

        .btn-check:active+.btn-success,
        .btn-check:checked+.btn-success,
        .btn-success.active,
        .btn-success:active,
        .show>.btn-success.dropdown-toggle {
            background-color: #146c43;
            border-color: #13653f;
            color: #fff
        }

        .btn-check:active+.btn-success:focus,
        .btn-check:checked+.btn-success:focus,
        .btn-success.active:focus,
        .btn-success:active:focus,
        .show>.btn-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 .25rem rgba(60, 153, 110, .5)
        }

        .btn-success.disabled,
        .btn-success:disabled {
            background-color: #198754;
            border-color: #198754;
            color: #fff
        }

        .btn-info {
            background-color: #0dcaf0;
            border-color: #0dcaf0;
            color: #000
        }

        .btn-check:focus+.btn-info,
        .btn-info:focus,
        .btn-info:hover {
            background-color: #31d2f2;
            border-color: #25cff2;
            color: #000
        }

        .btn-check:focus+.btn-info,
        .btn-info:focus {
            box-shadow: 0 0 0 .25rem rgba(11, 172, 204, .5)
        }

        .btn-check:active+.btn-info,
        .btn-check:checked+.btn-info,
        .btn-info.active,
        .btn-info:active,
        .show>.btn-info.dropdown-toggle {
            background-color: #3dd5f3;
            border-color: #25cff2;
            color: #000
        }

        .btn-check:active+.btn-info:focus,
        .btn-check:checked+.btn-info:focus,
        .btn-info.active:focus,
        .btn-info:active:focus,
        .show>.btn-info.dropdown-toggle:focus {
            box-shadow: 0 0 0 .25rem rgba(11, 172, 204, .5)
        }

        .btn-info.disabled,
        .btn-info:disabled {
            background-color: #0dcaf0;
            border-color: #0dcaf0;
            color: #000
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #000
        }

        .btn-check:focus+.btn-warning,
        .btn-warning:focus,
        .btn-warning:hover {
            background-color: #ffca2c;
            border-color: #ffc720;
            color: #000
        }

        .btn-check:focus+.btn-warning,
        .btn-warning:focus {
            box-shadow: 0 0 0 .25rem rgba(217, 164, 6, .5)
        }

        .btn-check:active+.btn-warning,
        .btn-check:checked+.btn-warning,
        .btn-warning.active,
        .btn-warning:active,
        .show>.btn-warning.dropdown-toggle {
            background-color: #ffcd39;
            border-color: #ffc720;
            color: #000
        }

        .btn-check:active+.btn-warning:focus,
        .btn-check:checked+.btn-warning:focus,
        .btn-warning.active:focus,
        .btn-warning:active:focus,
        .show>.btn-warning.dropdown-toggle:focus {
            box-shadow: 0 0 0 .25rem rgba(217, 164, 6, .5)
        }

        .btn-warning.disabled,
        .btn-warning:disabled {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #000
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #fff
        }

        .btn-check:focus+.btn-danger,
        .btn-danger:focus,
        .btn-danger:hover {
            background-color: #bb2d3b;
            border-color: #b02a37;
            color: #fff
        }

        .btn-check:focus+.btn-danger,
        .btn-danger:focus {
            box-shadow: 0 0 0 .25rem rgba(225, 83, 97, .5)
        }

        .btn-check:active+.btn-danger,
        .btn-check:checked+.btn-danger,
        .btn-danger.active,
        .btn-danger:active,
        .show>.btn-danger.dropdown-toggle {
            background-color: #b02a37;
            border-color: #a52834;
            color: #fff
        }

        .btn-check:active+.btn-danger:focus,
        .btn-check:checked+.btn-danger:focus,
        .btn-danger.active:focus,
        .btn-danger:active:focus,
        .show>.btn-danger.dropdown-toggle:focus {
            box-shadow: 0 0 0 .25rem rgba(225, 83, 97, .5)
        }

        .btn-danger.disabled,
        .btn-danger:disabled {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #fff
        }

        .btn-light {
            background-color: #f8f9fa;
            border-color: #f8f9fa;
            color: #000
        }

        .btn-check:focus+.btn-light,
        .btn-light:focus,
        .btn-light:hover {
            background-color: #f9fafb;
            border-color: #f9fafb;
            color: #000
        }

        .btn-check:focus+.btn-light,
        .btn-light:focus {
            box-shadow: 0 0 0 .25rem hsla(210, 2%, 83%, .5)
        }

        .btn-check:active+.btn-light,
        .btn-check:checked+.btn-light,
        .btn-light.active,
        .btn-light:active,
        .show>.btn-light.dropdown-toggle {
            background-color: #f9fafb;
            border-color: #f9fafb;
            color: #000
        }

        .btn-check:active+.btn-light:focus,
        .btn-check:checked+.btn-light:focus,
        .btn-light.active:focus,
        .btn-light:active:focus,
        .show>.btn-light.dropdown-toggle:focus {
            box-shadow: 0 0 0 .25rem hsla(210, 2%, 83%, .5)
        }

        .btn-light.disabled,
        .btn-light:disabled {
            background-color: #f8f9fa;
            border-color: #f8f9fa;
            color: #000
        }

        .btn-dark {
            background-color: #212529;
            border-color: #212529;
            color: #fff
        }

        .btn-check:focus+.btn-dark,
        .btn-dark:focus,
        .btn-dark:hover {
            background-color: #1c1f23;
            border-color: #1a1e21;
            color: #fff
        }

        .btn-check:focus+.btn-dark,
        .btn-dark:focus {
            box-shadow: 0 0 0 .25rem rgba(66, 70, 73, .5)
        }

        .btn-check:active+.btn-dark,
        .btn-check:checked+.btn-dark,
        .btn-dark.active,
        .btn-dark:active,
        .show>.btn-dark.dropdown-toggle {
            background-color: #1a1e21;
            border-color: #191c1f;
            color: #fff
        }

        .btn-check:active+.btn-dark:focus,
        .btn-check:checked+.btn-dark:focus,
        .btn-dark.active:focus,
        .btn-dark:active:focus,
        .show>.btn-dark.dropdown-toggle:focus {
            box-shadow: 0 0 0 .25rem rgba(66, 70, 73, .5)
        }

        .btn-dark.disabled,
        .btn-dark:disabled {
            background-color: #212529;
            border-color: #212529;
            color: #fff
        }

        .btn-outline-primary {
            border-color: #435ebe;
            color: #435ebe
        }

        .btn-outline-primary:hover {
            background-color: #435ebe;
            border-color: #435ebe;
            color: #fff
        }

        .btn-check:focus+.btn-outline-primary,
        .btn-outline-primary:focus {
            box-shadow: 0 0 0 .25rem rgba(67, 94, 190, .5)
        }

        .btn-check:active+.btn-outline-primary,
        .btn-check:checked+.btn-outline-primary,
        .btn-outline-primary.active,
        .btn-outline-primary.dropdown-toggle.show,
        .btn-outline-primary:active {
            background-color: #435ebe;
            border-color: #435ebe;
            color: #fff
        }

        .btn-check:active+.btn-outline-primary:focus,
        .btn-check:checked+.btn-outline-primary:focus,
        .btn-outline-primary.active:focus,
        .btn-outline-primary.dropdown-toggle.show:focus,
        .btn-outline-primary:active:focus {
            box-shadow: 0 0 0 .25rem rgba(67, 94, 190, .5)
        }

        .btn-outline-primary.disabled,
        .btn-outline-primary:disabled {
            background-color: transparent;
            color: #435ebe
        }

        .btn-outline-secondary {
            border-color: #6c757d;
            color: #6c757d
        }

        .btn-outline-secondary:hover {
            background-color: #6c757d;
            border-color: #6c757d;
            color: #fff
        }

        .btn-check:focus+.btn-outline-secondary,
        .btn-outline-secondary:focus {
            box-shadow: 0 0 0 .25rem hsla(208, 7%, 46%, .5)
        }

        .btn-check:active+.btn-outline-secondary,
        .btn-check:checked+.btn-outline-secondary,
        .btn-outline-secondary.active,
        .btn-outline-secondary.dropdown-toggle.show,
        .btn-outline-secondary:active {
            background-color: #6c757d;
            border-color: #6c757d;
            color: #fff
        }

        .btn-check:active+.btn-outline-secondary:focus,
        .btn-check:checked+.btn-outline-secondary:focus,
        .btn-outline-secondary.active:focus,
        .btn-outline-secondary.dropdown-toggle.show:focus,
        .btn-outline-secondary:active:focus {
            box-shadow: 0 0 0 .25rem hsla(208, 7%, 46%, .5)
        }

        .btn-outline-secondary.disabled,
        .btn-outline-secondary:disabled {
            background-color: transparent;
            color: #6c757d
        }

        .btn-outline-success {
            border-color: #198754;
            color: #198754
        }

        .btn-outline-success:hover {
            background-color: #198754;
            border-color: #198754;
            color: #fff
        }

        .btn-check:focus+.btn-outline-success,
        .btn-outline-success:focus {
            box-shadow: 0 0 0 .25rem rgba(25, 135, 84, .5)
        }

        .btn-check:active+.btn-outline-success,
        .btn-check:checked+.btn-outline-success,
        .btn-outline-success.active,
        .btn-outline-success.dropdown-toggle.show,
        .btn-outline-success:active {
            background-color: #198754;
            border-color: #198754;
            color: #fff
        }

        .btn-check:active+.btn-outline-success:focus,
        .btn-check:checked+.btn-outline-success:focus,
        .btn-outline-success.active:focus,
        .btn-outline-success.dropdown-toggle.show:focus,
        .btn-outline-success:active:focus {
            box-shadow: 0 0 0 .25rem rgba(25, 135, 84, .5)
        }

        .btn-outline-success.disabled,
        .btn-outline-success:disabled {
            background-color: transparent;
            color: #198754
        }

        .btn-outline-info {
            border-color: #0dcaf0;
            color: #0dcaf0
        }

        .btn-outline-info:hover {
            background-color: #0dcaf0;
            border-color: #0dcaf0;
            color: #000
        }

        .btn-check:focus+.btn-outline-info,
        .btn-outline-info:focus {
            box-shadow: 0 0 0 .25rem rgba(13, 202, 240, .5)
        }

        .btn-check:active+.btn-outline-info,
        .btn-check:checked+.btn-outline-info,
        .btn-outline-info.active,
        .btn-outline-info.dropdown-toggle.show,
        .btn-outline-info:active {
            background-color: #0dcaf0;
            border-color: #0dcaf0;
            color: #000
        }

        .btn-check:active+.btn-outline-info:focus,
        .btn-check:checked+.btn-outline-info:focus,
        .btn-outline-info.active:focus,
        .btn-outline-info.dropdown-toggle.show:focus,
        .btn-outline-info:active:focus {
            box-shadow: 0 0 0 .25rem rgba(13, 202, 240, .5)
        }

        .btn-outline-info.disabled,
        .btn-outline-info:disabled {
            background-color: transparent;
            color: #0dcaf0
        }

        .btn-outline-warning {
            border-color: #ffc107;
            color: #ffc107
        }

        .btn-outline-warning:hover {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #000
        }

        .btn-check:focus+.btn-outline-warning,
        .btn-outline-warning:focus {
            box-shadow: 0 0 0 .25rem rgba(255, 193, 7, .5)
        }

        .btn-check:active+.btn-outline-warning,
        .btn-check:checked+.btn-outline-warning,
        .btn-outline-warning.active,
        .btn-outline-warning.dropdown-toggle.show,
        .btn-outline-warning:active {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #000
        }

        .btn-check:active+.btn-outline-warning:focus,
        .btn-check:checked+.btn-outline-warning:focus,
        .btn-outline-warning.active:focus,
        .btn-outline-warning.dropdown-toggle.show:focus,
        .btn-outline-warning:active:focus {
            box-shadow: 0 0 0 .25rem rgba(255, 193, 7, .5)
        }

        .btn-outline-warning.disabled,
        .btn-outline-warning:disabled {
            background-color: transparent;
            color: #ffc107
        }

        .btn-outline-danger {
            border-color: #dc3545;
            color: #dc3545
        }

        .btn-outline-danger:hover {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #fff
        }

        .btn-check:focus+.btn-outline-danger,
        .btn-outline-danger:focus {
            box-shadow: 0 0 0 .25rem rgba(220, 53, 69, .5)
        }

        .btn-check:active+.btn-outline-danger,
        .btn-check:checked+.btn-outline-danger,
        .btn-outline-danger.active,
        .btn-outline-danger.dropdown-toggle.show,
        .btn-outline-danger:active {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #fff
        }

        .btn-check:active+.btn-outline-danger:focus,
        .btn-check:checked+.btn-outline-danger:focus,
        .btn-outline-danger.active:focus,
        .btn-outline-danger.dropdown-toggle.show:focus,
        .btn-outline-danger:active:focus {
            box-shadow: 0 0 0 .25rem rgba(220, 53, 69, .5)
        }

        .btn-outline-danger.disabled,
        .btn-outline-danger:disabled {
            background-color: transparent;
            color: #dc3545
        }

        .btn-outline-light {
            border-color: #f8f9fa;
            color: #f8f9fa
        }

        .btn-outline-light:hover {
            background-color: #f8f9fa;
            border-color: #f8f9fa;
            color: #000
        }

        .btn-check:focus+.btn-outline-light,
        .btn-outline-light:focus {
            box-shadow: 0 0 0 .25rem rgba(248, 249, 250, .5)
        }

        .btn-check:active+.btn-outline-light,
        .btn-check:checked+.btn-outline-light,
        .btn-outline-light.active,
        .btn-outline-light.dropdown-toggle.show,
        .btn-outline-light:active {
            background-color: #f8f9fa;
            border-color: #f8f9fa;
            color: #000
        }

        .btn-check:active+.btn-outline-light:focus,
        .btn-check:checked+.btn-outline-light:focus,
        .btn-outline-light.active:focus,
        .btn-outline-light.dropdown-toggle.show:focus,
        .btn-outline-light:active:focus {
            box-shadow: 0 0 0 .25rem rgba(248, 249, 250, .5)
        }

        .btn-outline-light.disabled,
        .btn-outline-light:disabled {
            background-color: transparent;
            color: #f8f9fa
        }

        .btn-outline-dark {
            border-color: #212529;
            color: #212529
        }

        .btn-outline-dark:hover {
            background-color: #212529;
            border-color: #212529;
            color: #fff
        }

        .btn-check:focus+.btn-outline-dark,
        .btn-outline-dark:focus {
            box-shadow: 0 0 0 .25rem rgba(33, 37, 41, .5)
        }

        .btn-check:active+.btn-outline-dark,
        .btn-check:checked+.btn-outline-dark,
        .btn-outline-dark.active,
        .btn-outline-dark.dropdown-toggle.show,
        .btn-outline-dark:active {
            background-color: #212529;
            border-color: #212529;
            color: #fff
        }

        .btn-check:active+.btn-outline-dark:focus,
        .btn-check:checked+.btn-outline-dark:focus,
        .btn-outline-dark.active:focus,
        .btn-outline-dark.dropdown-toggle.show:focus,
        .btn-outline-dark:active:focus {
            box-shadow: 0 0 0 .25rem rgba(33, 37, 41, .5)
        }

        .btn-outline-dark.disabled,
        .btn-outline-dark:disabled {
            background-color: transparent;
            color: #212529
        }

        .btn-link {
            color: #435ebe;
            font-weight: 400;
            text-decoration: underline
        }

        .btn-link:hover {
            color: #364b98
        }

        .btn-link.disabled,
        .btn-link:disabled {
            color: #6c757d
        }

        .btn-group-lg>.btn,
        .btn-lg {
            border-radius: .3rem;
            font-size: 1.25rem;
            padding: .5rem 1rem
        }

        .btn-group-sm>.btn,
        .btn-sm {
            border-radius: .2rem;
            font-size: .875rem;
            padding: .25rem .5rem
        }

        .fade {
            transition: opacity .15s linear
        }

        @media (prefers-reduced-motion:reduce) {
            .fade {
                transition: none
            }
        }

        .fade:not(.show) {
            opacity: 0
        }

        .collapse:not(.show) {
            display: none
        }

        .collapsing {
            height: 0;
            overflow: hidden;
            transition: height .35s ease
        }

        @media (prefers-reduced-motion:reduce) {
            .collapsing {
                transition: none
            }
        }

        .dropdown,
        .dropend,
        .dropstart,
        .dropup {
            position: relative
        }

        .dropdown-toggle {
            white-space: nowrap
        }

        .dropdown-toggle:after {
            border-bottom: 0;
            border-left: .3em solid transparent;
            border-right: .3em solid transparent;
            border-top: .3em solid;
            content: "";
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em
        }

        .dropdown-toggle:empty:after {
            margin-left: 0
        }

        .dropdown-menu {
            background-clip: padding-box;
            background-color: #fff;
            border: 0 solid rgba(0, 0, 0, .15);
            border-radius: .25rem;
            color: #607080;
            display: none;
            font-size: 1rem;
            list-style: none;
            margin: 0;
            min-width: 15rem;
            padding: .5rem 0;
            position: absolute;
            text-align: left;
            z-index: 1000
        }

        .dropdown-menu[data-bs-popper] {
            left: 0;
            margin-top: .125rem;
            top: 100%
        }

        .dropdown-menu-start {
            --bs-position: start
        }

        .dropdown-menu-start[data-bs-popper] {
            left: 0;
            right: auto
        }

        .dropdown-menu-end {
            --bs-position: end
        }

        .dropdown-menu-end[data-bs-popper] {
            left: auto;
            right: 0
        }

        @media (min-width:576px) {
            .dropdown-menu-sm-start {
                --bs-position: start
            }

            .dropdown-menu-sm-start[data-bs-popper] {
                left: 0;
                right: auto
            }

            .dropdown-menu-sm-end {
                --bs-position: end
            }

            .dropdown-menu-sm-end[data-bs-popper] {
                left: auto;
                right: 0
            }
        }

        @media (min-width:768px) {
            .dropdown-menu-md-start {
                --bs-position: start
            }

            .dropdown-menu-md-start[data-bs-popper] {
                left: 0;
                right: auto
            }

            .dropdown-menu-md-end {
                --bs-position: end
            }

            .dropdown-menu-md-end[data-bs-popper] {
                left: auto;
                right: 0
            }
        }

        @media (min-width:992px) {
            .dropdown-menu-lg-start {
                --bs-position: start
            }

            .dropdown-menu-lg-start[data-bs-popper] {
                left: 0;
                right: auto
            }

            .dropdown-menu-lg-end {
                --bs-position: end
            }

            .dropdown-menu-lg-end[data-bs-popper] {
                left: auto;
                right: 0
            }
        }

        @media (min-width:1200px) {
            .dropdown-menu-xl-start {
                --bs-position: start
            }

            .dropdown-menu-xl-start[data-bs-popper] {
                left: 0;
                right: auto
            }

            .dropdown-menu-xl-end {
                --bs-position: end
            }

            .dropdown-menu-xl-end[data-bs-popper] {
                left: auto;
                right: 0
            }
        }

        @media (min-width:1400px) {
            .dropdown-menu-xxl-start {
                --bs-position: start
            }

            .dropdown-menu-xxl-start[data-bs-popper] {
                left: 0;
                right: auto
            }

            .dropdown-menu-xxl-end {
                --bs-position: end
            }

            .dropdown-menu-xxl-end[data-bs-popper] {
                left: auto;
                right: 0
            }
        }

        .dropup .dropdown-menu[data-bs-popper] {
            bottom: 100%;
            margin-bottom: .125rem;
            margin-top: 0;
            top: auto
        }

        .dropup .dropdown-toggle:after {
            border-bottom: .3em solid;
            border-left: .3em solid transparent;
            border-right: .3em solid transparent;
            border-top: 0;
            content: "";
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em
        }

        .dropup .dropdown-toggle:empty:after {
            margin-left: 0
        }

        .dropend .dropdown-menu[data-bs-popper] {
            left: 100%;
            margin-left: .125rem;
            margin-top: 0;
            right: auto;
            top: 0
        }

        .dropend .dropdown-toggle:after {
            border-bottom: .3em solid transparent;
            border-left: .3em solid;
            border-right: 0;
            border-top: .3em solid transparent;
            content: "";
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em
        }

        .dropend .dropdown-toggle:empty:after {
            margin-left: 0
        }

        .dropend .dropdown-toggle:after {
            vertical-align: 0
        }

        .dropstart .dropdown-menu[data-bs-popper] {
            left: auto;
            margin-right: .125rem;
            margin-top: 0;
            right: 100%;
            top: 0
        }

        .dropstart .dropdown-toggle:after {
            content: "";
            display: inline-block;
            display: none;
            margin-left: .255em;
            vertical-align: .255em
        }

        .dropstart .dropdown-toggle:before {
            border-bottom: .3em solid transparent;
            border-right: .3em solid;
            border-top: .3em solid transparent;
            content: "";
            display: inline-block;
            margin-right: .255em;
            vertical-align: .255em
        }

        .dropstart .dropdown-toggle:empty:after {
            margin-left: 0
        }

        .dropstart .dropdown-toggle:before {
            vertical-align: 0
        }

        .dropdown-divider {
            border-top: 1px solid #bdc7d1;
            height: 0;
            margin: .5rem 0;
            overflow: hidden
        }

        .dropdown-item {
            background-color: transparent;
            border: 0;
            clear: both;
            color: #212529;
            display: block;
            font-weight: 400;
            padding: .45rem 1.5rem;
            text-align: inherit;
            text-decoration: none;
            white-space: nowrap;
            width: 100%
        }

        .dropdown-item:focus,
        .dropdown-item:hover {
            background-color: #f8f9fa;
            color: #1e2125
        }

        .dropdown-item.active,
        .dropdown-item:active {
            background-color: #435ebe;
            color: #fff;
            text-decoration: none
        }

        .dropdown-item.disabled,
        .dropdown-item:disabled {
            background-color: transparent;
            color: #6c757d;
            pointer-events: none
        }

        .dropdown-menu.show {
            display: block
        }

        .dropdown-header {
            color: #6c757d;
            display: block;
            font-size: .875rem;
            margin-bottom: 0;
            padding: .5rem 1.5rem;
            white-space: nowrap
        }

        .dropdown-item-text {
            color: #212529;
            display: block;
            padding: .45rem 1.5rem
        }

        .dropdown-menu-dark {
            background-color: #343a40;
            border-color: rgba(0, 0, 0, .15);
            color: #dee2e6
        }

        .dropdown-menu-dark .dropdown-item {
            color: #dee2e6
        }

        .dropdown-menu-dark .dropdown-item:focus,
        .dropdown-menu-dark .dropdown-item:hover {
            background-color: hsla(0, 0%, 100%, .15);
            color: #fff
        }

        .dropdown-menu-dark .dropdown-item.active,
        .dropdown-menu-dark .dropdown-item:active {
            background-color: #435ebe;
            color: #fff
        }

        .dropdown-menu-dark .dropdown-item.disabled,
        .dropdown-menu-dark .dropdown-item:disabled {
            color: #adb5bd
        }

        .dropdown-menu-dark .dropdown-divider {
            border-color: #bdc7d1
        }

        .dropdown-menu-dark .dropdown-item-text {
            color: #dee2e6
        }

        .dropdown-menu-dark .dropdown-header {
            color: #adb5bd
        }

        .btn-group,
        .btn-group-vertical {
            display: inline-flex;
            position: relative;
            vertical-align: middle
        }

        .btn-group-vertical>.btn,
        .btn-group>.btn {
            flex: 1 1 auto;
            position: relative
        }

        .btn-group-vertical>.btn-check:checked+.btn,
        .btn-group-vertical>.btn-check:focus+.btn,
        .btn-group-vertical>.btn.active,
        .btn-group-vertical>.btn:active,
        .btn-group-vertical>.btn:focus,
        .btn-group-vertical>.btn:hover,
        .btn-group>.btn-check:checked+.btn,
        .btn-group>.btn-check:focus+.btn,
        .btn-group>.btn.active,
        .btn-group>.btn:active,
        .btn-group>.btn:focus,
        .btn-group>.btn:hover {
            z-index: 1
        }

        .btn-toolbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start
        }

        .btn-toolbar .input-group {
            width: auto
        }

        .btn-group>.btn-group:not(:first-child),
        .btn-group>.btn:not(:first-child) {
            margin-left: -1px
        }

        .btn-group>.btn-group:not(:last-child)>.btn,
        .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
            border-bottom-right-radius: 0;
            border-top-right-radius: 0
        }

        .btn-group>.btn-group:not(:first-child)>.btn,
        .btn-group>.btn:nth-child(n+3),
        .btn-group>:not(.btn-check)+.btn {
            border-bottom-left-radius: 0;
            border-top-left-radius: 0
        }

        .dropdown-toggle-split {
            padding-left: .5625rem;
            padding-right: .5625rem
        }

        .dropdown-toggle-split:after,
        .dropend .dropdown-toggle-split:after,
        .dropup .dropdown-toggle-split:after {
            margin-left: 0
        }

        .dropstart .dropdown-toggle-split:before {
            margin-right: 0
        }

        .btn-group-sm>.btn+.dropdown-toggle-split,
        .btn-sm+.dropdown-toggle-split {
            padding-left: .375rem;
            padding-right: .375rem
        }

        .btn-group-lg>.btn+.dropdown-toggle-split,
        .btn-lg+.dropdown-toggle-split {
            padding-left: .75rem;
            padding-right: .75rem
        }

        .btn-group-vertical {
            align-items: flex-start;
            flex-direction: column;
            justify-content: center
        }

        .btn-group-vertical>.btn,
        .btn-group-vertical>.btn-group {
            width: 100%
        }

        .btn-group-vertical>.btn-group:not(:first-child),
        .btn-group-vertical>.btn:not(:first-child) {
            margin-top: -1px
        }

        .btn-group-vertical>.btn-group:not(:last-child)>.btn,
        .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle) {
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0
        }

        .btn-group-vertical>.btn-group:not(:first-child)>.btn,
        .btn-group-vertical>.btn~.btn {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .nav {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            margin-bottom: 0;
            padding-left: 0
        }

        .nav-link {
            display: block;
            padding: .5rem 1rem;
            text-decoration: none;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .nav-link {
                transition: none
            }
        }

        .nav-link.disabled {
            color: #6c757d;
            cursor: default;
            pointer-events: none
        }

        .nav-tabs {
            border-bottom: 1px solid #dee2e6
        }

        .nav-tabs .nav-link {
            background: none;
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            margin-bottom: -1px
        }

        .nav-tabs .nav-link:focus,
        .nav-tabs .nav-link:hover {
            border-color: #e9ecef #e9ecef #dee2e6;
            isolation: isolate
        }

        .nav-tabs .nav-link.disabled {
            background-color: transparent;
            border-color: transparent;
            color: #6c757d
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            background-color: #f2f7ff;
            border-color: #dee2e6 #dee2e6 #f2f7ff;
            color: #495057
        }

        .nav-tabs .dropdown-menu {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            margin-top: -1px
        }

        .nav-pills .nav-link {
            background: none;
            border: 0;
            border-radius: .25rem
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            background-color: #435ebe;
            color: #fff
        }

        .nav-fill .nav-item,
        .nav-fill>.nav-link {
            flex: 1 1 auto;
            text-align: center
        }

        .nav-justified .nav-item,
        .nav-justified>.nav-link {
            flex-basis: 0;
            flex-grow: 1;
            text-align: center
        }

        .nav-fill .nav-item .nav-link,
        .nav-justified .nav-item .nav-link {
            width: 100%
        }

        .tab-content>.tab-pane {
            display: none
        }

        .tab-content>.active {
            display: block
        }

        .navbar {
            align-items: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding-bottom: .5rem;
            padding-top: .5rem;
            position: relative
        }

        .navbar>.container,
        .navbar>.container-fluid,
        .navbar>.container-lg,
        .navbar>.container-md,
        .navbar>.container-sm,
        .navbar>.container-xl,
        .navbar>.container-xxl {
            align-items: center;
            display: flex;
            flex-wrap: inherit;
            justify-content: space-between
        }

        .navbar-brand {
            font-size: 1.25rem;
            margin-right: 1rem;
            padding-bottom: .3125rem;
            padding-top: .3125rem;
            text-decoration: none;
            white-space: nowrap
        }

        .navbar-nav {
            display: flex;
            flex-direction: column;
            list-style: none;
            margin-bottom: 0;
            padding-left: 0
        }

        .navbar-nav .nav-link {
            padding-left: 0;
            padding-right: 0
        }

        .navbar-nav .dropdown-menu {
            position: static
        }

        .navbar-text {
            padding-bottom: .5rem;
            padding-top: .5rem
        }

        .navbar-collapse {
            align-items: center;
            flex-basis: 100%;
            flex-grow: 1
        }

        .navbar-toggler {
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: .25rem;
            font-size: 1.25rem;
            line-height: 1;
            padding: .25rem .75rem;
            transition: box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .navbar-toggler {
                transition: none
            }
        }

        .navbar-toggler:hover {
            text-decoration: none
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 .25rem;
            outline: 0;
            text-decoration: none
        }

        .navbar-toggler-icon {
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: 100%;
            display: inline-block;
            height: 1.5em;
            vertical-align: middle;
            width: 1.5em
        }

        .navbar-nav-scroll {
            max-height: var(--bs-scroll-height, 75vh);
            overflow-y: auto
        }

        @media (min-width:576px) {
            .navbar-expand-sm {
                flex-wrap: nowrap;
                justify-content: flex-start
            }

            .navbar-expand-sm .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-sm .navbar-nav .nav-link {
                padding-left: .5rem;
                padding-right: .5rem
            }

            .navbar-expand-sm .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-sm .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-sm .navbar-toggler {
                display: none
            }
        }

        @media (min-width:768px) {
            .navbar-expand-md {
                flex-wrap: nowrap;
                justify-content: flex-start
            }

            .navbar-expand-md .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-md .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-md .navbar-nav .nav-link {
                padding-left: .5rem;
                padding-right: .5rem
            }

            .navbar-expand-md .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-md .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-md .navbar-toggler {
                display: none
            }
        }

        @media (min-width:992px) {
            .navbar-expand-lg {
                flex-wrap: nowrap;
                justify-content: flex-start
            }

            .navbar-expand-lg .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding-left: .5rem;
                padding-right: .5rem
            }

            .navbar-expand-lg .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-lg .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-lg .navbar-toggler {
                display: none
            }
        }

        @media (min-width:1200px) {
            .navbar-expand-xl {
                flex-wrap: nowrap;
                justify-content: flex-start
            }

            .navbar-expand-xl .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-xl .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-xl .navbar-nav .nav-link {
                padding-left: .5rem;
                padding-right: .5rem
            }

            .navbar-expand-xl .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-xl .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-xl .navbar-toggler {
                display: none
            }
        }

        @media (min-width:1400px) {
            .navbar-expand-xxl {
                flex-wrap: nowrap;
                justify-content: flex-start
            }

            .navbar-expand-xxl .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-xxl .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-xxl .navbar-nav .nav-link {
                padding-left: .5rem;
                padding-right: .5rem
            }

            .navbar-expand-xxl .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-xxl .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-xxl .navbar-toggler {
                display: none
            }
        }

        .navbar-expand {
            flex-wrap: nowrap;
            justify-content: flex-start
        }

        .navbar-expand .navbar-nav {
            flex-direction: row
        }

        .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand .navbar-nav .nav-link {
            padding-left: .5rem;
            padding-right: .5rem
        }

        .navbar-expand .navbar-nav-scroll {
            overflow: visible
        }

        .navbar-expand .navbar-collapse {
            display: flex !important;
            flex-basis: auto
        }

        .navbar-expand .navbar-toggler {
            display: none
        }

        .navbar-light .navbar-brand,
        .navbar-light .navbar-brand:focus,
        .navbar-light .navbar-brand:hover {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-light .navbar-nav .nav-link {
            color: rgba(0, 0, 0, .55)
        }

        .navbar-light .navbar-nav .nav-link:focus,
        .navbar-light .navbar-nav .nav-link:hover {
            color: rgba(0, 0, 0, .7)
        }

        .navbar-light .navbar-nav .nav-link.disabled {
            color: rgba(0, 0, 0, .3)
        }

        .navbar-light .navbar-nav .nav-link.active,
        .navbar-light .navbar-nav .show>.nav-link {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-light .navbar-toggler {
            border-color: rgba(0, 0, 0, .1);
            color: rgba(0, 0, 0, .55)
        }

        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(0, 0, 0, 0.55)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
        }

        .navbar-light .navbar-text {
            color: rgba(0, 0, 0, .55)
        }

        .navbar-light .navbar-text a,
        .navbar-light .navbar-text a:focus,
        .navbar-light .navbar-text a:hover {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-dark .navbar-brand,
        .navbar-dark .navbar-brand:focus,
        .navbar-dark .navbar-brand:hover {
            color: #fff
        }

        .navbar-dark .navbar-nav .nav-link {
            color: hsla(0, 0%, 100%, .55)
        }

        .navbar-dark .navbar-nav .nav-link:focus,
        .navbar-dark .navbar-nav .nav-link:hover {
            color: hsla(0, 0%, 100%, .75)
        }

        .navbar-dark .navbar-nav .nav-link.disabled {
            color: hsla(0, 0%, 100%, .25)
        }

        .navbar-dark .navbar-nav .nav-link.active,
        .navbar-dark .navbar-nav .show>.nav-link {
            color: #fff
        }

        .navbar-dark .navbar-toggler {
            border-color: hsla(0, 0%, 100%, .1);
            color: hsla(0, 0%, 100%, .55)
        }

        .navbar-dark .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(255, 255, 255, 0.55)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
        }

        .navbar-dark .navbar-text {
            color: hsla(0, 0%, 100%, .55)
        }

        .navbar-dark .navbar-text a,
        .navbar-dark .navbar-text a:focus,
        .navbar-dark .navbar-text a:hover {
            color: #fff
        }

        .card {
            word-wrap: break-word;
            background-clip: border-box;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .7rem;
            display: flex;
            flex-direction: column;
            min-width: 0;
            position: relative
        }

        .card>hr {
            margin-left: 0;
            margin-right: 0
        }

        .card>.list-group {
            border-bottom: inherit;
            border-top: inherit
        }

        .card>.list-group:first-child {
            border-top-left-radius: calc(.7rem - 1px);
            border-top-right-radius: calc(.7rem - 1px);
            border-top-width: 0
        }

        .card>.list-group:last-child {
            border-bottom-left-radius: calc(.7rem - 1px);
            border-bottom-right-radius: calc(.7rem - 1px);
            border-bottom-width: 0
        }

        .card>.card-header+.list-group,
        .card>.list-group+.card-footer {
            border-top: 0
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1rem
        }

        .card-title {
            margin-bottom: .5rem
        }

        .card-subtitle {
            margin-top: -.25rem
        }

        .card-subtitle,
        .card-text:last-child {
            margin-bottom: 0
        }

        .card-link:hover {
            text-decoration: none
        }

        .card-link+.card-link {
            margin-left: 1rem
        }

        .card-header {
            background-color: #fff;
            border-bottom: 1px solid rgba(0, 0, 0, .125);
            margin-bottom: 0;
            padding: 1.5rem
        }

        .card-header:first-child {
            border-radius: calc(.7rem - 1px) calc(.7rem - 1px) 0 0
        }

        .card-footer {
            background-color: #fff;
            border-top: 1px solid rgba(0, 0, 0, .125);
            padding: 1.5rem
        }

        .card-footer:last-child {
            border-radius: 0 0 calc(.7rem - 1px) calc(.7rem - 1px)
        }

        .card-header-tabs {
            border-bottom: 0;
            margin-bottom: -1.5rem;
            margin-left: -.75rem;
            margin-right: -.75rem
        }

        .card-header-tabs .nav-link.active {
            background-color: #fff;
            border-bottom-color: #fff
        }

        .card-header-pills {
            margin-left: -.75rem;
            margin-right: -.75rem
        }

        .card-img-overlay {
            border-radius: calc(.7rem - 1px);
            bottom: 0;
            left: 0;
            padding: 1rem;
            position: absolute;
            right: 0;
            top: 0
        }

        .card-img,
        .card-img-bottom,
        .card-img-top {
            width: 100%
        }

        .card-img,
        .card-img-top {
            border-top-left-radius: calc(.7rem - 1px);
            border-top-right-radius: calc(.7rem - 1px)
        }

        .card-img,
        .card-img-bottom {
            border-bottom-left-radius: calc(.7rem - 1px);
            border-bottom-right-radius: calc(.7rem - 1px)
        }

        .card-group>.card {
            margin-bottom: .75rem
        }

        @media (min-width:576px) {
            .card-group {
                display: flex;
                flex-flow: row wrap
            }

            .card-group>.card {
                flex: 1 0 0%;
                margin-bottom: 0
            }

            .card-group>.card+.card {
                border-left: 0;
                margin-left: 0
            }

            .card-group>.card:not(:last-child) {
                border-bottom-right-radius: 0;
                border-top-right-radius: 0
            }

            .card-group>.card:not(:last-child) .card-header,
            .card-group>.card:not(:last-child) .card-img-top {
                border-top-right-radius: 0
            }

            .card-group>.card:not(:last-child) .card-footer,
            .card-group>.card:not(:last-child) .card-img-bottom {
                border-bottom-right-radius: 0
            }

            .card-group>.card:not(:first-child) {
                border-bottom-left-radius: 0;
                border-top-left-radius: 0
            }

            .card-group>.card:not(:first-child) .card-header,
            .card-group>.card:not(:first-child) .card-img-top {
                border-top-left-radius: 0
            }

            .card-group>.card:not(:first-child) .card-footer,
            .card-group>.card:not(:first-child) .card-img-bottom {
                border-bottom-left-radius: 0
            }
        }

        .breadcrumb {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            margin-bottom: 1rem;
            padding: 0
        }

        .breadcrumb-item+.breadcrumb-item {
            padding-left: .5rem
        }

        .breadcrumb-item+.breadcrumb-item:before {
            color: #6c757d;
            content: var(--bs-breadcrumb-divider, "/");
            float: left;
            padding-right: .5rem
        }

        .breadcrumb-item.active {
            color: #6c757d
        }

        .pagination {
            display: flex;
            list-style: none;
            padding-left: 0
        }

        .page-link {
            background-color: #fff;
            border: 1px solid #dee2e6;
            color: #435ebe;
            display: block;
            position: relative;
            text-decoration: none;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .page-link {
                transition: none
            }
        }

        .page-link:hover {
            border-color: #dee2e6;
            z-index: 2
        }

        .page-link:focus,
        .page-link:hover {
            background-color: #e9ecef;
            color: #364b98
        }

        .page-link:focus {
            box-shadow: 0 0 0 .25rem rgba(67, 94, 190, .25);
            outline: 0;
            z-index: 3
        }

        .page-item:not(:first-child) .page-link {
            margin-left: -1px
        }

        .page-item.active .page-link {
            background-color: #435ebe;
            border-color: #435ebe;
            color: #fff;
            z-index: 3
        }

        .page-item.disabled .page-link {
            background-color: #fff;
            border-color: #dee2e6;
            color: #6c757d;
            pointer-events: none
        }

        .page-link {
            padding: .375rem .75rem
        }

        .page-item:first-child .page-link {
            border-bottom-left-radius: .25rem;
            border-top-left-radius: .25rem
        }

        .page-item:last-child .page-link {
            border-bottom-right-radius: .25rem;
            border-top-right-radius: .25rem
        }

        .pagination-lg .page-link {
            font-size: 1.25rem;
            padding: .75rem 1.5rem
        }

        .pagination-lg .page-item:first-child .page-link {
            border-bottom-left-radius: .3rem;
            border-top-left-radius: .3rem
        }

        .pagination-lg .page-item:last-child .page-link {
            border-bottom-right-radius: .3rem;
            border-top-right-radius: .3rem
        }

        .pagination-sm .page-link {
            font-size: .875rem;
            padding: .25rem .5rem
        }

        .pagination-sm .page-item:first-child .page-link {
            border-bottom-left-radius: .2rem;
            border-top-left-radius: .2rem
        }

        .pagination-sm .page-item:last-child .page-link {
            border-bottom-right-radius: .2rem;
            border-top-right-radius: .2rem
        }

        .badge {
            border-radius: .25rem;
            color: #fff;
            display: inline-block;
            font-size: .85em;
            font-weight: 700;
            line-height: 1;
            padding: .35em .65em;
            text-align: center;
            vertical-align: baseline;
            white-space: nowrap
        }

        .badge:empty {
            display: none
        }

        .btn .badge {
            position: relative;
            top: -1px
        }

        .alert {
            border: 1px solid transparent;
            border-radius: .25rem;
            margin-bottom: 1rem;
            padding: 1rem;
            position: relative
        }

        .alert-heading {
            color: inherit
        }

        .alert-link {
            font-weight: 700
        }

        .alert-dismissible {
            padding-right: 3rem
        }

        .alert-dismissible .btn-close {
            padding: 1.25rem 1rem;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 2
        }

        .alert-primary {
            background-color: #d9dff2;
            border-color: #c7cfec;
            color: #283872
        }

        .alert-primary .alert-link {
            color: #202d5b
        }

        .alert-secondary {
            background-color: #e2e3e5;
            border-color: #d3d6d8;
            color: #41464b
        }

        .alert-secondary .alert-link {
            color: #34383c
        }

        .alert-success {
            background-color: #d1e7dd;
            border-color: #badbcc;
            color: #0f5132
        }

        .alert-success .alert-link {
            color: #0c4128
        }

        .alert-info {
            background-color: #cff4fc;
            border-color: #b6effb;
            color: #055160
        }

        .alert-info .alert-link {
            color: #04414d
        }

        .alert-warning {
            background-color: #fff3cd;
            border-color: #ffecb5;
            color: #664d03
        }

        .alert-warning .alert-link {
            color: #523e02
        }

        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c2c7;
            color: #842029
        }

        .alert-danger .alert-link {
            color: #6a1a21
        }

        .alert-light {
            background-color: #fefefe;
            border-color: #fdfdfe;
            color: #636464
        }

        .alert-light .alert-link {
            color: #4f5050
        }

        .alert-dark {
            background-color: #d3d3d4;
            border-color: #bcbebf;
            color: #141619
        }

        .alert-dark .alert-link {
            color: #101214
        }

        @-webkit-keyframes progress-bar-stripes {
            0% {
                background-position-x: 1rem
            }
        }

        @keyframes progress-bar-stripes {
            0% {
                background-position-x: 1rem
            }
        }

        .progress {
            background-color: #e9ecef;
            border-radius: .25rem;
            font-size: .75rem;
            height: 1rem
        }

        .progress,
        .progress-bar {
            display: flex;
            overflow: hidden
        }

        .progress-bar {
            background-color: #435ebe;
            color: #fff;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            transition: width .6s ease;
            white-space: nowrap
        }

        @media (prefers-reduced-motion:reduce) {
            .progress-bar {
                transition: none
            }
        }

        .progress-bar-striped {
            background-image: linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, .15) 0, hsla(0, 0%, 100%, .15) 75%, transparent 0, transparent);
            background-size: 1rem 1rem
        }

        .progress-bar-animated {
            -webkit-animation: progress-bar-stripes 1s linear infinite;
            animation: progress-bar-stripes 1s linear infinite
        }

        @media (prefers-reduced-motion:reduce) {
            .progress-bar-animated {
                -webkit-animation: none;
                animation: none
            }
        }

        .list-group {
            border-radius: .25rem;
            display: flex;
            flex-direction: column;
            margin-bottom: 0;
            padding-left: 0
        }

        .list-group-numbered {
            counter-reset: section;
            list-style-type: none
        }

        .list-group-numbered>li:before {
            content: counters(section, ".") ". ";
            counter-increment: section
        }

        .list-group-item-action {
            color: #495057;
            text-align: inherit;
            width: 100%
        }

        .list-group-item-action:focus,
        .list-group-item-action:hover {
            background-color: #f8f9fa;
            color: #495057;
            text-decoration: none;
            z-index: 1
        }

        .list-group-item-action:active {
            background-color: #e9ecef;
            color: #607080
        }

        .list-group-item {
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .125);
            display: block;
            padding: .5rem 1rem;
            position: relative;
            text-decoration: none
        }

        .list-group-item:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit
        }

        .list-group-item:last-child {
            border-bottom-left-radius: inherit;
            border-bottom-right-radius: inherit
        }

        .list-group-item.disabled,
        .list-group-item:disabled {
            background-color: #fff;
            color: #6c757d;
            pointer-events: none
        }

        .list-group-item.active {
            background-color: #435ebe;
            border-color: #435ebe;
            color: #fff;
            z-index: 2
        }

        .list-group-item+.list-group-item {
            border-top-width: 0
        }

        .list-group-item+.list-group-item.active {
            border-top-width: 1px;
            margin-top: -1px
        }

        .list-group-horizontal {
            flex-direction: row
        }

        .list-group-horizontal>.list-group-item:first-child {
            border-bottom-left-radius: .25rem;
            border-top-right-radius: 0
        }

        .list-group-horizontal>.list-group-item:last-child {
            border-bottom-left-radius: 0;
            border-top-right-radius: .25rem
        }

        .list-group-horizontal>.list-group-item.active {
            margin-top: 0
        }

        .list-group-horizontal>.list-group-item+.list-group-item {
            border-left-width: 0;
            border-top-width: 1px
        }

        .list-group-horizontal>.list-group-item+.list-group-item.active {
            border-left-width: 1px;
            margin-left: -1px
        }

        @media (min-width:576px) {
            .list-group-horizontal-sm {
                flex-direction: row
            }

            .list-group-horizontal-sm>.list-group-item:first-child {
                border-bottom-left-radius: .25rem;
                border-top-right-radius: 0
            }

            .list-group-horizontal-sm>.list-group-item:last-child {
                border-bottom-left-radius: 0;
                border-top-right-radius: .25rem
            }

            .list-group-horizontal-sm>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-sm>.list-group-item+.list-group-item {
                border-left-width: 0;
                border-top-width: 1px
            }

            .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
                border-left-width: 1px;
                margin-left: -1px
            }
        }

        @media (min-width:768px) {
            .list-group-horizontal-md {
                flex-direction: row
            }

            .list-group-horizontal-md>.list-group-item:first-child {
                border-bottom-left-radius: .25rem;
                border-top-right-radius: 0
            }

            .list-group-horizontal-md>.list-group-item:last-child {
                border-bottom-left-radius: 0;
                border-top-right-radius: .25rem
            }

            .list-group-horizontal-md>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-md>.list-group-item+.list-group-item {
                border-left-width: 0;
                border-top-width: 1px
            }

            .list-group-horizontal-md>.list-group-item+.list-group-item.active {
                border-left-width: 1px;
                margin-left: -1px
            }
        }

        @media (min-width:992px) {
            .list-group-horizontal-lg {
                flex-direction: row
            }

            .list-group-horizontal-lg>.list-group-item:first-child {
                border-bottom-left-radius: .25rem;
                border-top-right-radius: 0
            }

            .list-group-horizontal-lg>.list-group-item:last-child {
                border-bottom-left-radius: 0;
                border-top-right-radius: .25rem
            }

            .list-group-horizontal-lg>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-lg>.list-group-item+.list-group-item {
                border-left-width: 0;
                border-top-width: 1px
            }

            .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
                border-left-width: 1px;
                margin-left: -1px
            }
        }

        @media (min-width:1200px) {
            .list-group-horizontal-xl {
                flex-direction: row
            }

            .list-group-horizontal-xl>.list-group-item:first-child {
                border-bottom-left-radius: .25rem;
                border-top-right-radius: 0
            }

            .list-group-horizontal-xl>.list-group-item:last-child {
                border-bottom-left-radius: 0;
                border-top-right-radius: .25rem
            }

            .list-group-horizontal-xl>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-xl>.list-group-item+.list-group-item {
                border-left-width: 0;
                border-top-width: 1px
            }

            .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
                border-left-width: 1px;
                margin-left: -1px
            }
        }

        @media (min-width:1400px) {
            .list-group-horizontal-xxl {
                flex-direction: row
            }

            .list-group-horizontal-xxl>.list-group-item:first-child {
                border-bottom-left-radius: .25rem;
                border-top-right-radius: 0
            }

            .list-group-horizontal-xxl>.list-group-item:last-child {
                border-bottom-left-radius: 0;
                border-top-right-radius: .25rem
            }

            .list-group-horizontal-xxl>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-xxl>.list-group-item+.list-group-item {
                border-left-width: 0;
                border-top-width: 1px
            }

            .list-group-horizontal-xxl>.list-group-item+.list-group-item.active {
                border-left-width: 1px;
                margin-left: -1px
            }
        }

        .list-group-flush {
            border-radius: 0
        }

        .list-group-flush>.list-group-item {
            border-width: 0 0 1px
        }

        .list-group-flush>.list-group-item:last-child {
            border-bottom-width: 0
        }

        .list-group-item-primary {
            background-color: #d9dff2;
            color: #283872
        }

        .list-group-item-primary.list-group-item-action:focus,
        .list-group-item-primary.list-group-item-action:hover {
            background-color: #c3c9da;
            color: #283872
        }

        .list-group-item-primary.list-group-item-action.active {
            background-color: #283872;
            border-color: #283872;
            color: #fff
        }

        .list-group-item-secondary {
            background-color: #e2e3e5;
            color: #41464b
        }

        .list-group-item-secondary.list-group-item-action:focus,
        .list-group-item-secondary.list-group-item-action:hover {
            background-color: #cbccce;
            color: #41464b
        }

        .list-group-item-secondary.list-group-item-action.active {
            background-color: #41464b;
            border-color: #41464b;
            color: #fff
        }

        .list-group-item-success {
            background-color: #d1e7dd;
            color: #0f5132
        }

        .list-group-item-success.list-group-item-action:focus,
        .list-group-item-success.list-group-item-action:hover {
            background-color: #bcd0c7;
            color: #0f5132
        }

        .list-group-item-success.list-group-item-action.active {
            background-color: #0f5132;
            border-color: #0f5132;
            color: #fff
        }

        .list-group-item-info {
            background-color: #cff4fc;
            color: #055160
        }

        .list-group-item-info.list-group-item-action:focus,
        .list-group-item-info.list-group-item-action:hover {
            background-color: #badce3;
            color: #055160
        }

        .list-group-item-info.list-group-item-action.active {
            background-color: #055160;
            border-color: #055160;
            color: #fff
        }

        .list-group-item-warning {
            background-color: #fff3cd;
            color: #664d03
        }

        .list-group-item-warning.list-group-item-action:focus,
        .list-group-item-warning.list-group-item-action:hover {
            background-color: #e6dbb9;
            color: #664d03
        }

        .list-group-item-warning.list-group-item-action.active {
            background-color: #664d03;
            border-color: #664d03;
            color: #fff
        }

        .list-group-item-danger {
            background-color: #f8d7da;
            color: #842029
        }

        .list-group-item-danger.list-group-item-action:focus,
        .list-group-item-danger.list-group-item-action:hover {
            background-color: #dfc2c4;
            color: #842029
        }

        .list-group-item-danger.list-group-item-action.active {
            background-color: #842029;
            border-color: #842029;
            color: #fff
        }

        .list-group-item-light {
            background-color: #fefefe;
            color: #636464
        }

        .list-group-item-light.list-group-item-action:focus,
        .list-group-item-light.list-group-item-action:hover {
            background-color: #e5e5e5;
            color: #636464
        }

        .list-group-item-light.list-group-item-action.active {
            background-color: #636464;
            border-color: #636464;
            color: #fff
        }

        .list-group-item-dark {
            background-color: #d3d3d4;
            color: #141619
        }

        .list-group-item-dark.list-group-item-action:focus,
        .list-group-item-dark.list-group-item-action:hover {
            background-color: #bebebf;
            color: #141619
        }

        .list-group-item-dark.list-group-item-action.active {
            background-color: #141619;
            border-color: #141619;
            color: #fff
        }

        .btn-close {
            background: transparent url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3E%3C/svg%3E") 50%/1em auto no-repeat;
            border: 0;
            border-radius: .25rem;
            box-sizing: content-box;
            color: #000;
            height: 1em;
            opacity: .5;
            padding: .25em;
            width: 1em
        }

        .btn-close:hover {
            color: #000;
            opacity: .75;
            text-decoration: none
        }

        .btn-close:focus {
            box-shadow: 0 0 0 .25rem rgba(67, 94, 190, .25);
            opacity: 1;
            outline: 0
        }

        .btn-close.disabled,
        .btn-close:disabled {
            opacity: .25;
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .btn-close-white {
            filter: invert(1) grayscale(100%) brightness(200%)
        }

        .toast {
            background-clip: padding-box;
            background-color: hsla(0, 0%, 100%, .85);
            border: 1px solid rgba(0, 0, 0, .1);
            border-radius: .25rem;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
            font-size: .875rem;
            max-width: 100%;
            pointer-events: auto;
            width: 350px
        }

        .toast:not(.showing):not(.show) {
            opacity: 0
        }

        .toast.hide {
            display: none
        }

        .toast-container {
            max-width: 100%;
            pointer-events: none;
            width: -webkit-max-content;
            width: -moz-max-content;
            width: max-content
        }

        .toast-container>:not(:last-child) {
            margin-bottom: .75rem
        }

        .toast-header {
            align-items: center;
            background-clip: padding-box;
            background-color: hsla(0, 0%, 100%, .85);
            border-bottom: 1px solid rgba(0, 0, 0, .05);
            border-top-left-radius: calc(.25rem - 1px);
            border-top-right-radius: calc(.25rem - 1px);
            color: #6c757d;
            display: flex;
            padding: .5rem .75rem
        }

        .toast-header .btn-close {
            margin-left: .75rem;
            margin-right: -.375rem
        }

        .toast-body {
            word-wrap: break-word;
            padding: .75rem
        }

        .modal {
            display: none;
            height: 100%;
            left: 0;
            outline: 0;
            overflow-x: hidden;
            overflow-y: auto;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1050
        }

        .modal-dialog {
            margin: .5rem;
            pointer-events: none;
            position: relative;
            width: auto
        }

        .modal.fade .modal-dialog {
            transform: translateY(-50px);
            transition: transform .3s ease-out
        }

        @media (prefers-reduced-motion:reduce) {
            .modal.fade .modal-dialog {
                transition: none
            }
        }

        .modal.show .modal-dialog {
            transform: none
        }

        .modal.modal-static .modal-dialog {
            transform: scale(1.02)
        }

        .modal-dialog-scrollable {
            height: calc(100% - 1rem)
        }

        .modal-dialog-scrollable .modal-content {
            max-height: 100%;
            overflow: hidden
        }

        .modal-dialog-scrollable .modal-body {
            overflow-y: auto
        }

        .modal-dialog-centered {
            align-items: center;
            display: flex;
            min-height: calc(100% - 1rem)
        }

        .modal-content {
            background-clip: padding-box;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem;
            display: flex;
            flex-direction: column;
            outline: 0;
            pointer-events: auto;
            position: relative;
            width: 100%
        }

        .modal-backdrop {
            background-color: #000;
            height: 100vh;
            left: 0;
            position: fixed;
            top: 0;
            width: 100vw;
            z-index: 1040
        }

        .modal-backdrop.fade {
            opacity: 0
        }

        .modal-backdrop.show {
            opacity: .5
        }

        .modal-header {
            align-items: center;
            border-bottom: 1px solid #dee2e6;
            border-top-left-radius: calc(.3rem - 1px);
            border-top-right-radius: calc(.3rem - 1px);
            display: flex;
            flex-shrink: 0;
            justify-content: space-between;
            padding: 1rem
        }

        .modal-header .btn-close {
            margin: -.5rem -.5rem -.5rem auto;
            padding: .5rem
        }

        .modal-title {
            line-height: 1.5;
            margin-bottom: 0
        }

        .modal-body {
            flex: 1 1 auto;
            padding: 1rem;
            position: relative
        }

        .modal-footer {
            align-items: center;
            border-bottom-left-radius: calc(.3rem - 1px);
            border-bottom-right-radius: calc(.3rem - 1px);
            border-top: 1px solid #dee2e6;
            display: flex;
            flex-shrink: 0;
            flex-wrap: wrap;
            justify-content: flex-end;
            padding: .75rem
        }

        .modal-footer>* {
            margin: .25rem
        }

        @media (min-width:576px) {
            .modal-dialog {
                margin: 1.75rem auto;
                max-width: 500px
            }

            .modal-dialog-scrollable {
                height: calc(100% - 3.5rem)
            }

            .modal-dialog-centered {
                min-height: calc(100% - 3.5rem)
            }

            .modal-sm {
                max-width: 300px
            }
        }

        @media (min-width:992px) {

            .modal-lg,
            .modal-xl {
                max-width: 800px
            }
        }

        @media (min-width:1200px) {
            .modal-xl {
                max-width: 1140px
            }
        }

        .modal-fullscreen {
            height: 100%;
            margin: 0;
            max-width: none;
            width: 100vw
        }

        .modal-fullscreen .modal-content {
            border: 0;
            border-radius: 0;
            height: 100%
        }

        .modal-fullscreen .modal-header {
            border-radius: 0
        }

        .modal-fullscreen .modal-body {
            overflow-y: auto
        }

        .modal-fullscreen .modal-footer {
            border-radius: 0
        }

        @media (max-width:575.98px) {
            .modal-fullscreen-sm-down {
                height: 100%;
                margin: 0;
                max-width: none;
                width: 100vw
            }

            .modal-fullscreen-sm-down .modal-content {
                border: 0;
                border-radius: 0;
                height: 100%
            }

            .modal-fullscreen-sm-down .modal-header {
                border-radius: 0
            }

            .modal-fullscreen-sm-down .modal-body {
                overflow-y: auto
            }

            .modal-fullscreen-sm-down .modal-footer {
                border-radius: 0
            }
        }

        @media (max-width:767.98px) {
            .modal-fullscreen-md-down {
                height: 100%;
                margin: 0;
                max-width: none;
                width: 100vw
            }

            .modal-fullscreen-md-down .modal-content {
                border: 0;
                border-radius: 0;
                height: 100%
            }

            .modal-fullscreen-md-down .modal-header {
                border-radius: 0
            }

            .modal-fullscreen-md-down .modal-body {
                overflow-y: auto
            }

            .modal-fullscreen-md-down .modal-footer {
                border-radius: 0
            }
        }

        @media (max-width:991.98px) {
            .modal-fullscreen-lg-down {
                height: 100%;
                margin: 0;
                max-width: none;
                width: 100vw
            }

            .modal-fullscreen-lg-down .modal-content {
                border: 0;
                border-radius: 0;
                height: 100%
            }

            .modal-fullscreen-lg-down .modal-header {
                border-radius: 0
            }

            .modal-fullscreen-lg-down .modal-body {
                overflow-y: auto
            }

            .modal-fullscreen-lg-down .modal-footer {
                border-radius: 0
            }
        }

        @media (max-width:1199.98px) {
            .modal-fullscreen-xl-down {
                height: 100%;
                margin: 0;
                max-width: none;
                width: 100vw
            }

            .modal-fullscreen-xl-down .modal-content {
                border: 0;
                border-radius: 0;
                height: 100%
            }

            .modal-fullscreen-xl-down .modal-header {
                border-radius: 0
            }

            .modal-fullscreen-xl-down .modal-body {
                overflow-y: auto
            }

            .modal-fullscreen-xl-down .modal-footer {
                border-radius: 0
            }
        }

        @media (max-width:1399.98px) {
            .modal-fullscreen-xxl-down {
                height: 100%;
                margin: 0;
                max-width: none;
                width: 100vw
            }

            .modal-fullscreen-xxl-down .modal-content {
                border: 0;
                border-radius: 0;
                height: 100%
            }

            .modal-fullscreen-xxl-down .modal-header {
                border-radius: 0
            }

            .modal-fullscreen-xxl-down .modal-body {
                overflow-y: auto
            }

            .modal-fullscreen-xxl-down .modal-footer {
                border-radius: 0
            }
        }

        .tooltip {
            word-wrap: break-word;
            display: block;
            font-family: Nunito;
            font-size: .875rem;
            font-style: normal;
            font-weight: 400;
            letter-spacing: normal;
            line-break: auto;
            line-height: 1.5;
            margin: 0;
            opacity: 0;
            position: absolute;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            white-space: normal;
            word-break: normal;
            word-spacing: normal;
            z-index: 1070
        }

        .tooltip.show {
            opacity: .9
        }

        .tooltip .tooltip-arrow {
            display: block;
            height: .4rem;
            position: absolute;
            width: .8rem
        }

        .tooltip .tooltip-arrow:before {
            border-color: transparent;
            border-style: solid;
            content: "";
            position: absolute
        }

        .bs-tooltip-auto[data-popper-placement^=top],
        .bs-tooltip-top {
            padding: .4rem 0
        }

        .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow,
        .bs-tooltip-top .tooltip-arrow {
            bottom: 0
        }

        .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow:before,
        .bs-tooltip-top .tooltip-arrow:before {
            border-top-color: #000;
            border-width: .4rem .4rem 0;
            top: -1px
        }

        .bs-tooltip-auto[data-popper-placement^=right],
        .bs-tooltip-end {
            padding: 0 .4rem
        }

        .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow,
        .bs-tooltip-end .tooltip-arrow {
            height: .8rem;
            left: 0;
            width: .4rem
        }

        .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow:before,
        .bs-tooltip-end .tooltip-arrow:before {
            border-right-color: #000;
            border-width: .4rem .4rem .4rem 0;
            right: -1px
        }

        .bs-tooltip-auto[data-popper-placement^=bottom],
        .bs-tooltip-bottom {
            padding: .4rem 0
        }

        .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow,
        .bs-tooltip-bottom .tooltip-arrow {
            top: 0
        }

        .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow:before,
        .bs-tooltip-bottom .tooltip-arrow:before {
            border-bottom-color: #000;
            border-width: 0 .4rem .4rem;
            bottom: -1px
        }

        .bs-tooltip-auto[data-popper-placement^=left],
        .bs-tooltip-start {
            padding: 0 .4rem
        }

        .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow,
        .bs-tooltip-start .tooltip-arrow {
            height: .8rem;
            right: 0;
            width: .4rem
        }

        .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow:before,
        .bs-tooltip-start .tooltip-arrow:before {
            border-left-color: #000;
            border-width: .4rem 0 .4rem .4rem;
            left: -1px
        }

        .tooltip-inner {
            background-color: #000;
            border-radius: .25rem;
            color: #fff;
            max-width: 200px;
            padding: .25rem .5rem;
            text-align: center
        }

        .popover {
            word-wrap: break-word;
            background-clip: padding-box;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: .3rem;
            display: block;
            font-family: Nunito;
            font-size: .875rem;
            font-style: normal;
            font-weight: 400;
            left: 0;
            letter-spacing: normal;
            line-break: auto;
            line-height: 1.5;
            max-width: 276px;
            position: absolute;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            top: 0;
            white-space: normal;
            word-break: normal;
            word-spacing: normal;
            z-index: 1060
        }

        .popover .popover-arrow {
            display: block;
            height: .5rem;
            position: absolute;
            width: 1rem
        }

        .popover .popover-arrow:after,
        .popover .popover-arrow:before {
            border-color: transparent;
            border-style: solid;
            content: "";
            display: block;
            position: absolute
        }

        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow,
        .bs-popover-top>.popover-arrow {
            bottom: calc(-.5rem - 1px)
        }

        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow:before,
        .bs-popover-top>.popover-arrow:before {
            border-top-color: rgba(0, 0, 0, .25);
            border-width: .5rem .5rem 0;
            bottom: 0
        }

        .bs-popover-auto[data-popper-placement^=top]>.popover-arrow:after,
        .bs-popover-top>.popover-arrow:after {
            border-top-color: #fff;
            border-width: .5rem .5rem 0;
            bottom: 1px
        }

        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow,
        .bs-popover-end>.popover-arrow {
            height: 1rem;
            left: calc(-.5rem - 1px);
            width: .5rem
        }

        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow:before,
        .bs-popover-end>.popover-arrow:before {
            border-right-color: rgba(0, 0, 0, .25);
            border-width: .5rem .5rem .5rem 0;
            left: 0
        }

        .bs-popover-auto[data-popper-placement^=right]>.popover-arrow:after,
        .bs-popover-end>.popover-arrow:after {
            border-right-color: #fff;
            border-width: .5rem .5rem .5rem 0;
            left: 1px
        }

        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow,
        .bs-popover-bottom>.popover-arrow {
            top: calc(-.5rem - 1px)
        }

        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow:before,
        .bs-popover-bottom>.popover-arrow:before {
            border-bottom-color: rgba(0, 0, 0, .25);
            border-width: 0 .5rem .5rem;
            top: 0
        }

        .bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow:after,
        .bs-popover-bottom>.popover-arrow:after {
            border-bottom-color: #fff;
            border-width: 0 .5rem .5rem;
            top: 1px
        }

        .bs-popover-auto[data-popper-placement^=bottom] .popover-header:before,
        .bs-popover-bottom .popover-header:before {
            border-bottom: 1px solid #f0f0f0;
            content: "";
            display: block;
            left: 50%;
            margin-left: -.5rem;
            position: absolute;
            top: 0;
            width: 1rem
        }

        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow,
        .bs-popover-start>.popover-arrow {
            height: 1rem;
            right: calc(-.5rem - 1px);
            width: .5rem
        }

        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow:before,
        .bs-popover-start>.popover-arrow:before {
            border-left-color: rgba(0, 0, 0, .25);
            border-width: .5rem 0 .5rem .5rem;
            right: 0
        }

        .bs-popover-auto[data-popper-placement^=left]>.popover-arrow:after,
        .bs-popover-start>.popover-arrow:after {
            border-left-color: #fff;
            border-width: .5rem 0 .5rem .5rem;
            right: 1px
        }

        .popover-header {
            background-color: #f0f0f0;
            border-bottom: 1px solid rgba(0, 0, 0, .2);
            border-top-left-radius: calc(.3rem - 1px);
            border-top-right-radius: calc(.3rem - 1px);
            color: #25396f;
            font-size: 1rem;
            margin-bottom: 0;
            padding: .5rem 1rem
        }

        .popover-header:empty {
            display: none
        }

        .popover-body {
            color: #607080;
            padding: 1rem
        }

        .carousel {
            position: relative
        }

        .carousel.pointer-event {
            touch-action: pan-y
        }

        .carousel-inner {
            overflow: hidden;
            position: relative;
            width: 100%
        }

        .carousel-inner:after {
            clear: both;
            content: "";
            display: block
        }

        .carousel-item {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            display: none;
            float: left;
            margin-right: -100%;
            position: relative;
            transition: transform .6s ease-in-out;
            width: 100%
        }

        @media (prefers-reduced-motion:reduce) {
            .carousel-item {
                transition: none
            }
        }

        .carousel-item-next,
        .carousel-item-prev,
        .carousel-item.active {
            display: block
        }

        .active.carousel-item-end,
        .carousel-item-next:not(.carousel-item-start) {
            transform: translateX(100%)
        }

        .active.carousel-item-start,
        .carousel-item-prev:not(.carousel-item-end) {
            transform: translateX(-100%)
        }

        .carousel-fade .carousel-item {
            opacity: 0;
            transform: none;
            transition-property: opacity
        }

        .carousel-fade .carousel-item-next.carousel-item-start,
        .carousel-fade .carousel-item-prev.carousel-item-end,
        .carousel-fade .carousel-item.active {
            opacity: 1;
            z-index: 1
        }

        .carousel-fade .active.carousel-item-end,
        .carousel-fade .active.carousel-item-start {
            opacity: 0;
            transition: opacity 0s .6s;
            z-index: 0
        }

        @media (prefers-reduced-motion:reduce) {

            .carousel-fade .active.carousel-item-end,
            .carousel-fade .active.carousel-item-start {
                transition: none
            }
        }

        .carousel-control-next,
        .carousel-control-prev {
            align-items: center;
            background: none;
            border: 0;
            bottom: 0;
            color: #fff;
            display: flex;
            justify-content: center;
            opacity: .5;
            padding: 0;
            position: absolute;
            text-align: center;
            top: 0;
            transition: opacity .15s ease;
            width: 15%;
            z-index: 1
        }

        @media (prefers-reduced-motion:reduce) {

            .carousel-control-next,
            .carousel-control-prev {
                transition: none
            }
        }

        .carousel-control-next:focus,
        .carousel-control-next:hover,
        .carousel-control-prev:focus,
        .carousel-control-prev:hover {
            color: #fff;
            opacity: .9;
            outline: 0;
            text-decoration: none
        }

        .carousel-control-prev {
            left: 0
        }

        .carousel-control-next {
            right: 0
        }

        .carousel-control-next-icon,
        .carousel-control-prev-icon {
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            display: inline-block;
            height: 2rem;
            width: 2rem
        }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3E%3Cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3E%3C/svg%3E")
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3E%3Cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3E%3C/svg%3E")
        }

        .carousel-indicators {
            bottom: 0;
            display: flex;
            justify-content: center;
            left: 0;
            list-style: none;
            margin-bottom: 1rem;
            margin-left: 15%;
            margin-right: 15%;
            padding: 0;
            position: absolute;
            right: 0;
            z-index: 2
        }

        .carousel-indicators [data-bs-target] {
            background-clip: padding-box;
            background-color: #fff;
            border: 0;
            border-bottom: 10px solid transparent;
            border-top: 10px solid transparent;
            box-sizing: content-box;
            cursor: pointer;
            flex: 0 1 auto;
            height: 3px;
            margin-left: 3px;
            margin-right: 3px;
            opacity: .5;
            padding: 0;
            text-indent: -999px;
            transition: opacity .6s ease;
            width: 30px
        }

        @media (prefers-reduced-motion:reduce) {
            .carousel-indicators [data-bs-target] {
                transition: none
            }
        }

        .carousel-indicators .active {
            opacity: 1
        }

        .carousel-caption {
            bottom: 1.25rem;
            color: #fff;
            left: 15%;
            padding-bottom: 1.25rem;
            padding-top: 1.25rem;
            position: absolute;
            right: 15%;
            text-align: center
        }

        .carousel-dark .carousel-control-next-icon,
        .carousel-dark .carousel-control-prev-icon {
            filter: invert(1) grayscale(100)
        }

        .carousel-dark .carousel-indicators [data-bs-target] {
            background-color: #000
        }

        .carousel-dark .carousel-caption {
            color: #000
        }

        @-webkit-keyframes spinner-border {
            to {
                transform: rotate(1turn)
            }
        }

        @keyframes spinner-border {
            to {
                transform: rotate(1turn)
            }
        }

        .spinner-border {
            -webkit-animation: spinner-border .75s linear infinite;
            animation: spinner-border .75s linear infinite;
            border: .25em solid;
            border-radius: 50%;
            border-right: .25em solid transparent;
            display: inline-block;
            height: 2rem;
            vertical-align: -.125em;
            width: 2rem
        }

        .spinner-border-sm {
            border-width: .2em;
            height: 1rem;
            width: 1rem
        }

        @-webkit-keyframes spinner-grow {
            0% {
                transform: scale(0)
            }

            50% {
                opacity: 1;
                transform: none
            }
        }

        @keyframes spinner-grow {
            0% {
                transform: scale(0)
            }

            50% {
                opacity: 1;
                transform: none
            }
        }

        .spinner-grow {
            -webkit-animation: spinner-grow .75s linear infinite;
            animation: spinner-grow .75s linear infinite;
            background-color: currentColor;
            border-radius: 50%;
            display: inline-block;
            height: 2rem;
            opacity: 0;
            vertical-align: -.125em;
            width: 2rem
        }

        .spinner-grow-sm {
            height: 1rem;
            width: 1rem
        }

        @media (prefers-reduced-motion:reduce) {

            .spinner-border,
            .spinner-grow {
                -webkit-animation-duration: 1.5s;
                animation-duration: 1.5s
            }
        }

        .clearfix:after {
            clear: both;
            content: "";
            display: block
        }

        .link-primary {
            color: #435ebe
        }

        .link-primary:focus,
        .link-primary:hover {
            color: #364b98
        }

        .link-secondary {
            color: #6c757d
        }

        .link-secondary:focus,
        .link-secondary:hover {
            color: #565e64
        }

        .link-success {
            color: #198754
        }

        .link-success:focus,
        .link-success:hover {
            color: #146c43
        }

        .link-info {
            color: #0dcaf0
        }

        .link-info:focus,
        .link-info:hover {
            color: #3dd5f3
        }

        .link-warning {
            color: #ffc107
        }

        .link-warning:focus,
        .link-warning:hover {
            color: #ffcd39
        }

        .link-danger {
            color: #dc3545
        }

        .link-danger:focus,
        .link-danger:hover {
            color: #b02a37
        }

        .link-light {
            color: #f8f9fa
        }

        .link-light:focus,
        .link-light:hover {
            color: #f9fafb
        }

        .link-dark {
            color: #212529
        }

        .link-dark:focus,
        .link-dark:hover {
            color: #1a1e21
        }

        .ratio {
            position: relative;
            width: 100%
        }

        .ratio:before {
            content: "";
            display: block;
            padding-top: var(--bs-aspect-ratio)
        }

        .ratio>* {
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%
        }

        .ratio-1x1 {
            --bs-aspect-ratio: 100%
        }

        .ratio-4x3 {
            --bs-aspect-ratio: 75%
        }

        .ratio-16x9 {
            --bs-aspect-ratio: 56.25%
        }

        .ratio-21x9 {
            --bs-aspect-ratio: 42.8571428571%
        }

        .fixed-top {
            top: 0
        }

        .fixed-bottom,
        .fixed-top {
            left: 0;
            position: fixed;
            right: 0;
            z-index: 1030
        }

        .fixed-bottom {
            bottom: 0
        }

        .sticky-top {
            position: sticky;
            top: 0;
            z-index: 1020
        }

        @media (min-width:576px) {
            .sticky-sm-top {
                position: sticky;
                top: 0;
                z-index: 1020
            }
        }

        @media (min-width:768px) {
            .sticky-md-top {
                position: sticky;
                top: 0;
                z-index: 1020
            }
        }

        @media (min-width:992px) {
            .sticky-lg-top {
                position: sticky;
                top: 0;
                z-index: 1020
            }
        }

        @media (min-width:1200px) {
            .sticky-xl-top {
                position: sticky;
                top: 0;
                z-index: 1020
            }
        }

        @media (min-width:1400px) {
            .sticky-xxl-top {
                position: sticky;
                top: 0;
                z-index: 1020
            }
        }

        .visually-hidden,
        .visually-hidden-focusable:not(:focus):not(:focus-within) {
            clip: rect(0, 0, 0, 0) !important;
            border: 0 !important;
            height: 1px !important;
            margin: -1px !important;
            overflow: hidden !important;
            padding: 0 !important;
            position: absolute !important;
            white-space: nowrap !important;
            width: 1px !important
        }

        .stretched-link:after {
            bottom: 0;
            content: "";
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 1
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .align-baseline {
            vertical-align: baseline !important
        }

        .align-top {
            vertical-align: top !important
        }

        .align-middle {
            vertical-align: middle !important
        }

        .align-bottom {
            vertical-align: bottom !important
        }

        .align-text-bottom {
            vertical-align: text-bottom !important
        }

        .align-text-top {
            vertical-align: text-top !important
        }

        .float-start {
            float: left !important
        }

        .float-end {
            float: right !important
        }

        .float-none {
            float: none !important
        }

        .overflow-auto {
            overflow: auto !important
        }

        .overflow-hidden {
            overflow: hidden !important
        }

        .overflow-visible {
            overflow: visible !important
        }

        .overflow-scroll {
            overflow: scroll !important
        }

        .d-inline {
            display: inline !important
        }

        .d-inline-block {
            display: inline-block !important
        }

        .d-block {
            display: block !important
        }

        .d-grid {
            display: grid !important
        }

        .d-table {
            display: table !important
        }

        .d-table-row {
            display: table-row !important
        }

        .d-table-cell {
            display: table-cell !important
        }

        .d-flex {
            display: flex !important
        }

        .d-inline-flex {
            display: inline-flex !important
        }

        .d-none {
            display: none !important
        }

        .shadow {
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important
        }

        .shadow-sm {
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important
        }

        .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important
        }

        .shadow-none {
            box-shadow: none !important
        }

        .position-static {
            position: static !important
        }

        .position-relative {
            position: relative !important
        }

        .position-absolute {
            position: absolute !important
        }

        .position-fixed {
            position: fixed !important
        }

        .position-sticky {
            position: sticky !important
        }

        .top-0 {
            top: 0 !important
        }

        .top-50 {
            top: 50% !important
        }

        .top-100 {
            top: 100% !important
        }

        .bottom-0 {
            bottom: 0 !important
        }

        .bottom-50 {
            bottom: 50% !important
        }

        .bottom-100 {
            bottom: 100% !important
        }

        .start-0 {
            left: 0 !important
        }

        .start-50 {
            left: 50% !important
        }

        .start-100 {
            left: 100% !important
        }

        .end-0 {
            right: 0 !important
        }

        .end-50 {
            right: 50% !important
        }

        .end-100 {
            right: 100% !important
        }

        .translate-middle {
            transform: translate(-50%, -50%) !important
        }

        .translate-middle-x {
            transform: translateX(-50%) !important
        }

        .translate-middle-y {
            transform: translateY(-50%) !important
        }

        .border {
            border: 1px solid #dee2e6 !important
        }

        .border-0 {
            border: 0 !important
        }

        .border-top {
            border-top: 1px solid #dee2e6 !important
        }

        .border-top-0 {
            border-top: 0 !important
        }

        .border-end {
            border-right: 1px solid #dee2e6 !important
        }

        .border-end-0 {
            border-right: 0 !important
        }

        .border-bottom {
            border-bottom: 1px solid #dee2e6 !important
        }

        .border-bottom-0 {
            border-bottom: 0 !important
        }

        .border-start {
            border-left: 1px solid #dee2e6 !important
        }

        .border-start-0 {
            border-left: 0 !important
        }

        .border-primary {
            border-color: #435ebe !important
        }

        .border-secondary {
            border-color: #6c757d !important
        }

        .border-success {
            border-color: #198754 !important
        }

        .border-info {
            border-color: #0dcaf0 !important
        }

        .border-warning {
            border-color: #ffc107 !important
        }

        .border-danger {
            border-color: #dc3545 !important
        }

        .border-light {
            border-color: #f8f9fa !important
        }

        .border-dark {
            border-color: #212529 !important
        }

        .border-white {
            border-color: #fff !important
        }

        .border-0 {
            border-width: 0 !important
        }

        .border-1 {
            border-width: 1px !important
        }

        .border-2 {
            border-width: 2px !important
        }

        .border-3 {
            border-width: 3px !important
        }

        .border-4 {
            border-width: 4px !important
        }

        .border-5 {
            border-width: 5px !important
        }

        .w-25 {
            width: 25% !important
        }

        .w-50 {
            width: 50% !important
        }

        .w-75 {
            width: 75% !important
        }

        .w-100 {
            width: 100% !important
        }

        .w-auto {
            width: auto !important
        }

        .mw-100 {
            max-width: 100% !important
        }

        .vw-100 {
            width: 100vw !important
        }

        .min-vw-100 {
            min-width: 100vw !important
        }

        .h-25 {
            height: 25% !important
        }

        .h-50 {
            height: 50% !important
        }

        .h-75 {
            height: 75% !important
        }

        .h-100 {
            height: 100% !important
        }

        .h-auto {
            height: auto !important
        }

        .mh-100 {
            max-height: 100% !important
        }

        .vh-100 {
            height: 100vh !important
        }

        .min-vh-100 {
            min-height: 100vh !important
        }

        .flex-fill {
            flex: 1 1 auto !important
        }

        .flex-row {
            flex-direction: row !important
        }

        .flex-column {
            flex-direction: column !important
        }

        .flex-row-reverse {
            flex-direction: row-reverse !important
        }

        .flex-column-reverse {
            flex-direction: column-reverse !important
        }

        .flex-grow-0 {
            flex-grow: 0 !important
        }

        .flex-grow-1 {
            flex-grow: 1 !important
        }

        .flex-shrink-0 {
            flex-shrink: 0 !important
        }

        .flex-shrink-1 {
            flex-shrink: 1 !important
        }

        .flex-wrap {
            flex-wrap: wrap !important
        }

        .flex-nowrap {
            flex-wrap: nowrap !important
        }

        .flex-wrap-reverse {
            flex-wrap: wrap-reverse !important
        }

        .gap-0 {
            gap: 0 !important
        }

        .gap-1 {
            gap: .25rem !important
        }

        .gap-2 {
            gap: .5rem !important
        }

        .gap-3 {
            gap: 1rem !important
        }

        .gap-4 {
            gap: 1.5rem !important
        }

        .gap-5 {
            gap: 3rem !important
        }

        .justify-content-start {
            justify-content: flex-start !important
        }

        .justify-content-end {
            justify-content: flex-end !important
        }

        .justify-content-center {
            justify-content: center !important
        }

        .justify-content-between {
            justify-content: space-between !important
        }

        .justify-content-around {
            justify-content: space-around !important
        }

        .justify-content-evenly {
            justify-content: space-evenly !important
        }

        .align-items-start {
            align-items: flex-start !important
        }

        .align-items-end {
            align-items: flex-end !important
        }

        .align-items-center {
            align-items: center !important
        }

        .align-items-baseline {
            align-items: baseline !important
        }

        .align-items-stretch {
            align-items: stretch !important
        }

        .align-content-start {
            align-content: flex-start !important
        }

        .align-content-end {
            align-content: flex-end !important
        }

        .align-content-center {
            align-content: center !important
        }

        .align-content-between {
            align-content: space-between !important
        }

        .align-content-around {
            align-content: space-around !important
        }

        .align-content-stretch {
            align-content: stretch !important
        }

        .align-self-auto {
            align-self: auto !important
        }

        .align-self-start {
            align-self: flex-start !important
        }

        .align-self-end {
            align-self: flex-end !important
        }

        .align-self-center {
            align-self: center !important
        }

        .align-self-baseline {
            align-self: baseline !important
        }

        .align-self-stretch {
            align-self: stretch !important
        }

        .order-first {
            order: -1 !important
        }

        .order-0 {
            order: 0 !important
        }

        .order-1 {
            order: 1 !important
        }

        .order-2 {
            order: 2 !important
        }

        .order-3 {
            order: 3 !important
        }

        .order-4 {
            order: 4 !important
        }

        .order-5 {
            order: 5 !important
        }

        .order-last {
            order: 6 !important
        }

        .m-0 {
            margin: 0 !important
        }

        .m-1 {
            margin: .25rem !important
        }

        .m-2 {
            margin: .5rem !important
        }

        .m-3 {
            margin: 1rem !important
        }

        .m-4 {
            margin: 1.5rem !important
        }

        .m-5 {
            margin: 3rem !important
        }

        .m-auto {
            margin: auto !important
        }

        .mx-0 {
            margin-left: 0 !important;
            margin-right: 0 !important
        }

        .mx-1 {
            margin-left: .25rem !important;
            margin-right: .25rem !important
        }

        .mx-2 {
            margin-left: .5rem !important;
            margin-right: .5rem !important
        }

        .mx-3 {
            margin-left: 1rem !important;
            margin-right: 1rem !important
        }

        .mx-4 {
            margin-left: 1.5rem !important;
            margin-right: 1.5rem !important
        }

        .mx-5 {
            margin-left: 3rem !important;
            margin-right: 3rem !important
        }

        .mx-auto {
            margin-left: auto !important;
            margin-right: auto !important
        }

        .my-0 {
            margin-bottom: 0 !important;
            margin-top: 0 !important
        }

        .my-1 {
            margin-bottom: .25rem !important;
            margin-top: .25rem !important
        }

        .my-2 {
            margin-bottom: .5rem !important;
            margin-top: .5rem !important
        }

        .my-3 {
            margin-bottom: 1rem !important;
            margin-top: 1rem !important
        }

        .my-4 {
            margin-bottom: 1.5rem !important;
            margin-top: 1.5rem !important
        }

        .my-5 {
            margin-bottom: 3rem !important;
            margin-top: 3rem !important
        }

        .my-auto {
            margin-bottom: auto !important;
            margin-top: auto !important
        }

        .mt-0 {
            margin-top: 0 !important
        }

        .mt-1 {
            margin-top: .25rem !important
        }

        .mt-2 {
            margin-top: .5rem !important
        }

        .mt-3 {
            margin-top: 1rem !important
        }

        .mt-4 {
            margin-top: 1.5rem !important
        }

        .mt-5 {
            margin-top: 3rem !important
        }

        .mt-auto {
            margin-top: auto !important
        }

        .me-0 {
            margin-right: 0 !important
        }

        .me-1 {
            margin-right: .25rem !important
        }

        .me-2 {
            margin-right: .5rem !important
        }

        .me-3 {
            margin-right: 1rem !important
        }

        .me-4 {
            margin-right: 1.5rem !important
        }

        .me-5 {
            margin-right: 3rem !important
        }

        .me-auto {
            margin-right: auto !important
        }

        .mb-0 {
            margin-bottom: 0 !important
        }

        .mb-1 {
            margin-bottom: .25rem !important
        }

        .mb-2 {
            margin-bottom: .5rem !important
        }

        .mb-3 {
            margin-bottom: 1rem !important
        }

        .mb-4 {
            margin-bottom: 1.5rem !important
        }

        .mb-5 {
            margin-bottom: 3rem !important
        }

        .mb-auto {
            margin-bottom: auto !important
        }

        .ms-0 {
            margin-left: 0 !important
        }

        .ms-1 {
            margin-left: .25rem !important
        }

        .ms-2 {
            margin-left: .5rem !important
        }

        .ms-3 {
            margin-left: 1rem !important
        }

        .ms-4 {
            margin-left: 1.5rem !important
        }

        .ms-5 {
            margin-left: 3rem !important
        }

        .ms-auto {
            margin-left: auto !important
        }

        .p-0 {
            padding: 0 !important
        }

        .p-1 {
            padding: .25rem !important
        }

        .p-2 {
            padding: .5rem !important
        }

        .p-3 {
            padding: 1rem !important
        }

        .p-4 {
            padding: 1.5rem !important
        }

        .p-5 {
            padding: 3rem !important
        }

        .px-0 {
            padding-left: 0 !important;
            padding-right: 0 !important
        }

        .px-1 {
            padding-left: .25rem !important;
            padding-right: .25rem !important
        }

        .px-2 {
            padding-left: .5rem !important;
            padding-right: .5rem !important
        }

        .px-3 {
            padding-left: 1rem !important;
            padding-right: 1rem !important
        }

        .px-4 {
            padding-left: 1.5rem !important;
            padding-right: 1.5rem !important
        }

        .px-5 {
            padding-left: 3rem !important;
            padding-right: 3rem !important
        }

        .py-0 {
            padding-bottom: 0 !important;
            padding-top: 0 !important
        }

        .py-1 {
            padding-bottom: .25rem !important;
            padding-top: .25rem !important
        }

        .py-2 {
            padding-bottom: .5rem !important;
            padding-top: .5rem !important
        }

        .py-3 {
            padding-bottom: 1rem !important;
            padding-top: 1rem !important
        }

        .py-4 {
            padding-bottom: 1.5rem !important;
            padding-top: 1.5rem !important
        }

        .py-5 {
            padding-bottom: 3rem !important;
            padding-top: 3rem !important
        }

        .pt-0 {
            padding-top: 0 !important
        }

        .pt-1 {
            padding-top: .25rem !important
        }

        .pt-2 {
            padding-top: .5rem !important
        }

        .pt-3 {
            padding-top: 1rem !important
        }

        .pt-4 {
            padding-top: 1.5rem !important
        }

        .pt-5 {
            padding-top: 3rem !important
        }

        .pe-0 {
            padding-right: 0 !important
        }

        .pe-1 {
            padding-right: .25rem !important
        }

        .pe-2 {
            padding-right: .5rem !important
        }

        .pe-3 {
            padding-right: 1rem !important
        }

        .pe-4 {
            padding-right: 1.5rem !important
        }

        .pe-5 {
            padding-right: 3rem !important
        }

        .pb-0 {
            padding-bottom: 0 !important
        }

        .pb-1 {
            padding-bottom: .25rem !important
        }

        .pb-2 {
            padding-bottom: .5rem !important
        }

        .pb-3 {
            padding-bottom: 1rem !important
        }

        .pb-4 {
            padding-bottom: 1.5rem !important
        }

        .pb-5 {
            padding-bottom: 3rem !important
        }

        .ps-0 {
            padding-left: 0 !important
        }

        .ps-1 {
            padding-left: .25rem !important
        }

        .ps-2 {
            padding-left: .5rem !important
        }

        .ps-3 {
            padding-left: 1rem !important
        }

        .ps-4 {
            padding-left: 1.5rem !important
        }

        .ps-5 {
            padding-left: 3rem !important
        }

        .font-monospace {
            font-family: var(--bs-font-monospace) !important
        }

        .fs-1 {
            font-size: calc(1.375rem + 1.5vw) !important
        }

        .fs-2 {
            font-size: calc(1.325rem + .9vw) !important
        }

        .fs-3 {
            font-size: calc(1.3rem + .6vw) !important
        }

        .fs-4 {
            font-size: calc(1.275rem + .3vw) !important
        }

        .fs-5 {
            font-size: 1.25rem !important
        }

        .fs-6 {
            font-size: 1rem !important
        }

        .fst-italic {
            font-style: italic !important
        }

        .fst-normal {
            font-style: normal !important
        }

        .fw-light {
            font-weight: 300 !important
        }

        .fw-lighter {
            font-weight: lighter !important
        }

        .fw-normal {
            font-weight: 400 !important
        }

        .fw-bold {
            font-weight: 700 !important
        }

        .fw-bolder {
            font-weight: bolder !important
        }

        .lh-1 {
            line-height: 1 !important
        }

        .lh-sm {
            line-height: 1.25 !important
        }

        .lh-base {
            line-height: 1.5 !important
        }

        .lh-lg {
            line-height: 2 !important
        }

        .text-start {
            text-align: left !important
        }

        .text-end {
            text-align: right !important
        }

        .text-center {
            text-align: center !important
        }

        .text-decoration-none {
            text-decoration: none !important
        }

        .text-decoration-underline {
            text-decoration: underline !important
        }

        .text-decoration-line-through {
            text-decoration: line-through !important
        }

        .text-lowercase {
            text-transform: lowercase !important
        }

        .text-uppercase {
            text-transform: uppercase !important
        }

        .text-capitalize {
            text-transform: capitalize !important
        }

        .text-wrap {
            white-space: normal !important
        }

        .text-nowrap {
            white-space: nowrap !important
        }

        .text-break {
            word-wrap: break-word !important;
            word-break: break-word !important
        }

        .text-primary {
            color: #435ebe !important
        }

        .text-secondary {
            color: #6c757d !important
        }

        .text-success {
            color: #198754 !important
        }

        .text-info {
            color: #0dcaf0 !important
        }

        .text-warning {
            color: #ffc107 !important
        }

        .text-danger {
            color: #dc3545 !important
        }

        .text-light {
            color: #f8f9fa !important
        }

        .text-dark {
            color: #212529 !important
        }

        .text-white {
            color: #fff !important
        }

        .text-body {
            color: #607080 !important
        }

        .text-muted {
            color: #7c8db5 !important
        }

        .text-black-50 {
            color: rgba(0, 0, 0, .5) !important
        }

        .text-white-50 {
            color: hsla(0, 0%, 100%, .5) !important
        }

        .text-reset {
            color: inherit !important
        }

        .bg-primary {
            background-color: #435ebe !important
        }

        .bg-secondary {
            background-color: #6c757d !important
        }

        .bg-success {
            background-color: #198754 !important
        }

        .bg-info {
            background-color: #0dcaf0 !important
        }

        .bg-warning {
            background-color: #ffc107 !important
        }

        .bg-danger {
            background-color: #dc3545 !important
        }

        .bg-light {
            background-color: #f8f9fa !important
        }

        .bg-dark {
            background-color: #212529 !important
        }

        .bg-body {
            background-color: #f2f7ff !important
        }

        .bg-white {
            background-color: #fff !important
        }

        .bg-transparent {
            background-color: transparent !important
        }

        .bg-gradient {
            background-image: var(--bs-gradient) !important
        }

        .user-select-all {
            -webkit-user-select: all !important;
            -moz-user-select: all !important;
            user-select: all !important
        }

        .user-select-auto {
            -webkit-user-select: auto !important;
            -moz-user-select: auto !important;
            -ms-user-select: auto !important;
            user-select: auto !important
        }

        .user-select-none {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important
        }

        .pe-none {
            pointer-events: none !important
        }

        .pe-auto {
            pointer-events: auto !important
        }

        .rounded {
            border-radius: .25rem !important
        }

        .rounded-0 {
            border-radius: 0 !important
        }

        .rounded-1 {
            border-radius: .2rem !important
        }

        .rounded-2 {
            border-radius: .25rem !important
        }

        .rounded-3 {
            border-radius: .3rem !important
        }

        .rounded-circle {
            border-radius: 50% !important
        }

        .rounded-pill {
            border-radius: 50rem !important
        }

        .rounded-top {
            border-top-left-radius: .25rem !important
        }

        .rounded-end,
        .rounded-top {
            border-top-right-radius: .25rem !important
        }

        .rounded-bottom,
        .rounded-end {
            border-bottom-right-radius: .25rem !important
        }

        .rounded-bottom,
        .rounded-start {
            border-bottom-left-radius: .25rem !important
        }

        .rounded-start {
            border-top-left-radius: .25rem !important
        }

        .visible {
            visibility: visible !important
        }

        .invisible {
            visibility: hidden !important
        }

        @media (min-width:576px) {
            .float-sm-start {
                float: left !important
            }

            .float-sm-end {
                float: right !important
            }

            .float-sm-none {
                float: none !important
            }

            .d-sm-inline {
                display: inline !important
            }

            .d-sm-inline-block {
                display: inline-block !important
            }

            .d-sm-block {
                display: block !important
            }

            .d-sm-grid {
                display: grid !important
            }

            .d-sm-table {
                display: table !important
            }

            .d-sm-table-row {
                display: table-row !important
            }

            .d-sm-table-cell {
                display: table-cell !important
            }

            .d-sm-flex {
                display: flex !important
            }

            .d-sm-inline-flex {
                display: inline-flex !important
            }

            .d-sm-none {
                display: none !important
            }

            .flex-sm-fill {
                flex: 1 1 auto !important
            }

            .flex-sm-row {
                flex-direction: row !important
            }

            .flex-sm-column {
                flex-direction: column !important
            }

            .flex-sm-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-sm-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-sm-grow-0 {
                flex-grow: 0 !important
            }

            .flex-sm-grow-1 {
                flex-grow: 1 !important
            }

            .flex-sm-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-sm-shrink-1 {
                flex-shrink: 1 !important
            }

            .flex-sm-wrap {
                flex-wrap: wrap !important
            }

            .flex-sm-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-sm-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .gap-sm-0 {
                gap: 0 !important
            }

            .gap-sm-1 {
                gap: .25rem !important
            }

            .gap-sm-2 {
                gap: .5rem !important
            }

            .gap-sm-3 {
                gap: 1rem !important
            }

            .gap-sm-4 {
                gap: 1.5rem !important
            }

            .gap-sm-5 {
                gap: 3rem !important
            }

            .justify-content-sm-start {
                justify-content: flex-start !important
            }

            .justify-content-sm-end {
                justify-content: flex-end !important
            }

            .justify-content-sm-center {
                justify-content: center !important
            }

            .justify-content-sm-between {
                justify-content: space-between !important
            }

            .justify-content-sm-around {
                justify-content: space-around !important
            }

            .justify-content-sm-evenly {
                justify-content: space-evenly !important
            }

            .align-items-sm-start {
                align-items: flex-start !important
            }

            .align-items-sm-end {
                align-items: flex-end !important
            }

            .align-items-sm-center {
                align-items: center !important
            }

            .align-items-sm-baseline {
                align-items: baseline !important
            }

            .align-items-sm-stretch {
                align-items: stretch !important
            }

            .align-content-sm-start {
                align-content: flex-start !important
            }

            .align-content-sm-end {
                align-content: flex-end !important
            }

            .align-content-sm-center {
                align-content: center !important
            }

            .align-content-sm-between {
                align-content: space-between !important
            }

            .align-content-sm-around {
                align-content: space-around !important
            }

            .align-content-sm-stretch {
                align-content: stretch !important
            }

            .align-self-sm-auto {
                align-self: auto !important
            }

            .align-self-sm-start {
                align-self: flex-start !important
            }

            .align-self-sm-end {
                align-self: flex-end !important
            }

            .align-self-sm-center {
                align-self: center !important
            }

            .align-self-sm-baseline {
                align-self: baseline !important
            }

            .align-self-sm-stretch {
                align-self: stretch !important
            }

            .order-sm-first {
                order: -1 !important
            }

            .order-sm-0 {
                order: 0 !important
            }

            .order-sm-1 {
                order: 1 !important
            }

            .order-sm-2 {
                order: 2 !important
            }

            .order-sm-3 {
                order: 3 !important
            }

            .order-sm-4 {
                order: 4 !important
            }

            .order-sm-5 {
                order: 5 !important
            }

            .order-sm-last {
                order: 6 !important
            }

            .m-sm-0 {
                margin: 0 !important
            }

            .m-sm-1 {
                margin: .25rem !important
            }

            .m-sm-2 {
                margin: .5rem !important
            }

            .m-sm-3 {
                margin: 1rem !important
            }

            .m-sm-4 {
                margin: 1.5rem !important
            }

            .m-sm-5 {
                margin: 3rem !important
            }

            .m-sm-auto {
                margin: auto !important
            }

            .mx-sm-0 {
                margin-left: 0 !important;
                margin-right: 0 !important
            }

            .mx-sm-1 {
                margin-left: .25rem !important;
                margin-right: .25rem !important
            }

            .mx-sm-2 {
                margin-left: .5rem !important;
                margin-right: .5rem !important
            }

            .mx-sm-3 {
                margin-left: 1rem !important;
                margin-right: 1rem !important
            }

            .mx-sm-4 {
                margin-left: 1.5rem !important;
                margin-right: 1.5rem !important
            }

            .mx-sm-5 {
                margin-left: 3rem !important;
                margin-right: 3rem !important
            }

            .mx-sm-auto {
                margin-left: auto !important;
                margin-right: auto !important
            }

            .my-sm-0 {
                margin-bottom: 0 !important;
                margin-top: 0 !important
            }

            .my-sm-1 {
                margin-bottom: .25rem !important;
                margin-top: .25rem !important
            }

            .my-sm-2 {
                margin-bottom: .5rem !important;
                margin-top: .5rem !important
            }

            .my-sm-3 {
                margin-bottom: 1rem !important;
                margin-top: 1rem !important
            }

            .my-sm-4 {
                margin-bottom: 1.5rem !important;
                margin-top: 1.5rem !important
            }

            .my-sm-5 {
                margin-bottom: 3rem !important;
                margin-top: 3rem !important
            }

            .my-sm-auto {
                margin-bottom: auto !important;
                margin-top: auto !important
            }

            .mt-sm-0 {
                margin-top: 0 !important
            }

            .mt-sm-1 {
                margin-top: .25rem !important
            }

            .mt-sm-2 {
                margin-top: .5rem !important
            }

            .mt-sm-3 {
                margin-top: 1rem !important
            }

            .mt-sm-4 {
                margin-top: 1.5rem !important
            }

            .mt-sm-5 {
                margin-top: 3rem !important
            }

            .mt-sm-auto {
                margin-top: auto !important
            }

            .me-sm-0 {
                margin-right: 0 !important
            }

            .me-sm-1 {
                margin-right: .25rem !important
            }

            .me-sm-2 {
                margin-right: .5rem !important
            }

            .me-sm-3 {
                margin-right: 1rem !important
            }

            .me-sm-4 {
                margin-right: 1.5rem !important
            }

            .me-sm-5 {
                margin-right: 3rem !important
            }

            .me-sm-auto {
                margin-right: auto !important
            }

            .mb-sm-0 {
                margin-bottom: 0 !important
            }

            .mb-sm-1 {
                margin-bottom: .25rem !important
            }

            .mb-sm-2 {
                margin-bottom: .5rem !important
            }

            .mb-sm-3 {
                margin-bottom: 1rem !important
            }

            .mb-sm-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-sm-5 {
                margin-bottom: 3rem !important
            }

            .mb-sm-auto {
                margin-bottom: auto !important
            }

            .ms-sm-0 {
                margin-left: 0 !important
            }

            .ms-sm-1 {
                margin-left: .25rem !important
            }

            .ms-sm-2 {
                margin-left: .5rem !important
            }

            .ms-sm-3 {
                margin-left: 1rem !important
            }

            .ms-sm-4 {
                margin-left: 1.5rem !important
            }

            .ms-sm-5 {
                margin-left: 3rem !important
            }

            .ms-sm-auto {
                margin-left: auto !important
            }

            .p-sm-0 {
                padding: 0 !important
            }

            .p-sm-1 {
                padding: .25rem !important
            }

            .p-sm-2 {
                padding: .5rem !important
            }

            .p-sm-3 {
                padding: 1rem !important
            }

            .p-sm-4 {
                padding: 1.5rem !important
            }

            .p-sm-5 {
                padding: 3rem !important
            }

            .px-sm-0 {
                padding-left: 0 !important;
                padding-right: 0 !important
            }

            .px-sm-1 {
                padding-left: .25rem !important;
                padding-right: .25rem !important
            }

            .px-sm-2 {
                padding-left: .5rem !important;
                padding-right: .5rem !important
            }

            .px-sm-3 {
                padding-left: 1rem !important;
                padding-right: 1rem !important
            }

            .px-sm-4 {
                padding-left: 1.5rem !important;
                padding-right: 1.5rem !important
            }

            .px-sm-5 {
                padding-left: 3rem !important;
                padding-right: 3rem !important
            }

            .py-sm-0 {
                padding-bottom: 0 !important;
                padding-top: 0 !important
            }

            .py-sm-1 {
                padding-bottom: .25rem !important;
                padding-top: .25rem !important
            }

            .py-sm-2 {
                padding-bottom: .5rem !important;
                padding-top: .5rem !important
            }

            .py-sm-3 {
                padding-bottom: 1rem !important;
                padding-top: 1rem !important
            }

            .py-sm-4 {
                padding-bottom: 1.5rem !important;
                padding-top: 1.5rem !important
            }

            .py-sm-5 {
                padding-bottom: 3rem !important;
                padding-top: 3rem !important
            }

            .pt-sm-0 {
                padding-top: 0 !important
            }

            .pt-sm-1 {
                padding-top: .25rem !important
            }

            .pt-sm-2 {
                padding-top: .5rem !important
            }

            .pt-sm-3 {
                padding-top: 1rem !important
            }

            .pt-sm-4 {
                padding-top: 1.5rem !important
            }

            .pt-sm-5 {
                padding-top: 3rem !important
            }

            .pe-sm-0 {
                padding-right: 0 !important
            }

            .pe-sm-1 {
                padding-right: .25rem !important
            }

            .pe-sm-2 {
                padding-right: .5rem !important
            }

            .pe-sm-3 {
                padding-right: 1rem !important
            }

            .pe-sm-4 {
                padding-right: 1.5rem !important
            }

            .pe-sm-5 {
                padding-right: 3rem !important
            }

            .pb-sm-0 {
                padding-bottom: 0 !important
            }

            .pb-sm-1 {
                padding-bottom: .25rem !important
            }

            .pb-sm-2 {
                padding-bottom: .5rem !important
            }

            .pb-sm-3 {
                padding-bottom: 1rem !important
            }

            .pb-sm-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-sm-5 {
                padding-bottom: 3rem !important
            }

            .ps-sm-0 {
                padding-left: 0 !important
            }

            .ps-sm-1 {
                padding-left: .25rem !important
            }

            .ps-sm-2 {
                padding-left: .5rem !important
            }

            .ps-sm-3 {
                padding-left: 1rem !important
            }

            .ps-sm-4 {
                padding-left: 1.5rem !important
            }

            .ps-sm-5 {
                padding-left: 3rem !important
            }

            .text-sm-start {
                text-align: left !important
            }

            .text-sm-end {
                text-align: right !important
            }

            .text-sm-center {
                text-align: center !important
            }
        }

        @media (min-width:768px) {
            .float-md-start {
                float: left !important
            }

            .float-md-end {
                float: right !important
            }

            .float-md-none {
                float: none !important
            }

            .d-md-inline {
                display: inline !important
            }

            .d-md-inline-block {
                display: inline-block !important
            }

            .d-md-block {
                display: block !important
            }

            .d-md-grid {
                display: grid !important
            }

            .d-md-table {
                display: table !important
            }

            .d-md-table-row {
                display: table-row !important
            }

            .d-md-table-cell {
                display: table-cell !important
            }

            .d-md-flex {
                display: flex !important
            }

            .d-md-inline-flex {
                display: inline-flex !important
            }

            .d-md-none {
                display: none !important
            }

            .flex-md-fill {
                flex: 1 1 auto !important
            }

            .flex-md-row {
                flex-direction: row !important
            }

            .flex-md-column {
                flex-direction: column !important
            }

            .flex-md-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-md-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-md-grow-0 {
                flex-grow: 0 !important
            }

            .flex-md-grow-1 {
                flex-grow: 1 !important
            }

            .flex-md-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-md-shrink-1 {
                flex-shrink: 1 !important
            }

            .flex-md-wrap {
                flex-wrap: wrap !important
            }

            .flex-md-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-md-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .gap-md-0 {
                gap: 0 !important
            }

            .gap-md-1 {
                gap: .25rem !important
            }

            .gap-md-2 {
                gap: .5rem !important
            }

            .gap-md-3 {
                gap: 1rem !important
            }

            .gap-md-4 {
                gap: 1.5rem !important
            }

            .gap-md-5 {
                gap: 3rem !important
            }

            .justify-content-md-start {
                justify-content: flex-start !important
            }

            .justify-content-md-end {
                justify-content: flex-end !important
            }

            .justify-content-md-center {
                justify-content: center !important
            }

            .justify-content-md-between {
                justify-content: space-between !important
            }

            .justify-content-md-around {
                justify-content: space-around !important
            }

            .justify-content-md-evenly {
                justify-content: space-evenly !important
            }

            .align-items-md-start {
                align-items: flex-start !important
            }

            .align-items-md-end {
                align-items: flex-end !important
            }

            .align-items-md-center {
                align-items: center !important
            }

            .align-items-md-baseline {
                align-items: baseline !important
            }

            .align-items-md-stretch {
                align-items: stretch !important
            }

            .align-content-md-start {
                align-content: flex-start !important
            }

            .align-content-md-end {
                align-content: flex-end !important
            }

            .align-content-md-center {
                align-content: center !important
            }

            .align-content-md-between {
                align-content: space-between !important
            }

            .align-content-md-around {
                align-content: space-around !important
            }

            .align-content-md-stretch {
                align-content: stretch !important
            }

            .align-self-md-auto {
                align-self: auto !important
            }

            .align-self-md-start {
                align-self: flex-start !important
            }

            .align-self-md-end {
                align-self: flex-end !important
            }

            .align-self-md-center {
                align-self: center !important
            }

            .align-self-md-baseline {
                align-self: baseline !important
            }

            .align-self-md-stretch {
                align-self: stretch !important
            }

            .order-md-first {
                order: -1 !important
            }

            .order-md-0 {
                order: 0 !important
            }

            .order-md-1 {
                order: 1 !important
            }

            .order-md-2 {
                order: 2 !important
            }

            .order-md-3 {
                order: 3 !important
            }

            .order-md-4 {
                order: 4 !important
            }

            .order-md-5 {
                order: 5 !important
            }

            .order-md-last {
                order: 6 !important
            }

            .m-md-0 {
                margin: 0 !important
            }

            .m-md-1 {
                margin: .25rem !important
            }

            .m-md-2 {
                margin: .5rem !important
            }

            .m-md-3 {
                margin: 1rem !important
            }

            .m-md-4 {
                margin: 1.5rem !important
            }

            .m-md-5 {
                margin: 3rem !important
            }

            .m-md-auto {
                margin: auto !important
            }

            .mx-md-0 {
                margin-left: 0 !important;
                margin-right: 0 !important
            }

            .mx-md-1 {
                margin-left: .25rem !important;
                margin-right: .25rem !important
            }

            .mx-md-2 {
                margin-left: .5rem !important;
                margin-right: .5rem !important
            }

            .mx-md-3 {
                margin-left: 1rem !important;
                margin-right: 1rem !important
            }

            .mx-md-4 {
                margin-left: 1.5rem !important;
                margin-right: 1.5rem !important
            }

            .mx-md-5 {
                margin-left: 3rem !important;
                margin-right: 3rem !important
            }

            .mx-md-auto {
                margin-left: auto !important;
                margin-right: auto !important
            }

            .my-md-0 {
                margin-bottom: 0 !important;
                margin-top: 0 !important
            }

            .my-md-1 {
                margin-bottom: .25rem !important;
                margin-top: .25rem !important
            }

            .my-md-2 {
                margin-bottom: .5rem !important;
                margin-top: .5rem !important
            }

            .my-md-3 {
                margin-bottom: 1rem !important;
                margin-top: 1rem !important
            }

            .my-md-4 {
                margin-bottom: 1.5rem !important;
                margin-top: 1.5rem !important
            }

            .my-md-5 {
                margin-bottom: 3rem !important;
                margin-top: 3rem !important
            }

            .my-md-auto {
                margin-bottom: auto !important;
                margin-top: auto !important
            }

            .mt-md-0 {
                margin-top: 0 !important
            }

            .mt-md-1 {
                margin-top: .25rem !important
            }

            .mt-md-2 {
                margin-top: .5rem !important
            }

            .mt-md-3 {
                margin-top: 1rem !important
            }

            .mt-md-4 {
                margin-top: 1.5rem !important
            }

            .mt-md-5 {
                margin-top: 3rem !important
            }

            .mt-md-auto {
                margin-top: auto !important
            }

            .me-md-0 {
                margin-right: 0 !important
            }

            .me-md-1 {
                margin-right: .25rem !important
            }

            .me-md-2 {
                margin-right: .5rem !important
            }

            .me-md-3 {
                margin-right: 1rem !important
            }

            .me-md-4 {
                margin-right: 1.5rem !important
            }

            .me-md-5 {
                margin-right: 3rem !important
            }

            .me-md-auto {
                margin-right: auto !important
            }

            .mb-md-0 {
                margin-bottom: 0 !important
            }

            .mb-md-1 {
                margin-bottom: .25rem !important
            }

            .mb-md-2 {
                margin-bottom: .5rem !important
            }

            .mb-md-3 {
                margin-bottom: 1rem !important
            }

            .mb-md-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-md-5 {
                margin-bottom: 3rem !important
            }

            .mb-md-auto {
                margin-bottom: auto !important
            }

            .ms-md-0 {
                margin-left: 0 !important
            }

            .ms-md-1 {
                margin-left: .25rem !important
            }

            .ms-md-2 {
                margin-left: .5rem !important
            }

            .ms-md-3 {
                margin-left: 1rem !important
            }

            .ms-md-4 {
                margin-left: 1.5rem !important
            }

            .ms-md-5 {
                margin-left: 3rem !important
            }

            .ms-md-auto {
                margin-left: auto !important
            }

            .p-md-0 {
                padding: 0 !important
            }

            .p-md-1 {
                padding: .25rem !important
            }

            .p-md-2 {
                padding: .5rem !important
            }

            .p-md-3 {
                padding: 1rem !important
            }

            .p-md-4 {
                padding: 1.5rem !important
            }

            .p-md-5 {
                padding: 3rem !important
            }

            .px-md-0 {
                padding-left: 0 !important;
                padding-right: 0 !important
            }

            .px-md-1 {
                padding-left: .25rem !important;
                padding-right: .25rem !important
            }

            .px-md-2 {
                padding-left: .5rem !important;
                padding-right: .5rem !important
            }

            .px-md-3 {
                padding-left: 1rem !important;
                padding-right: 1rem !important
            }

            .px-md-4 {
                padding-left: 1.5rem !important;
                padding-right: 1.5rem !important
            }

            .px-md-5 {
                padding-left: 3rem !important;
                padding-right: 3rem !important
            }

            .py-md-0 {
                padding-bottom: 0 !important;
                padding-top: 0 !important
            }

            .py-md-1 {
                padding-bottom: .25rem !important;
                padding-top: .25rem !important
            }

            .py-md-2 {
                padding-bottom: .5rem !important;
                padding-top: .5rem !important
            }

            .py-md-3 {
                padding-bottom: 1rem !important;
                padding-top: 1rem !important
            }

            .py-md-4 {
                padding-bottom: 1.5rem !important;
                padding-top: 1.5rem !important
            }

            .py-md-5 {
                padding-bottom: 3rem !important;
                padding-top: 3rem !important
            }

            .pt-md-0 {
                padding-top: 0 !important
            }

            .pt-md-1 {
                padding-top: .25rem !important
            }

            .pt-md-2 {
                padding-top: .5rem !important
            }

            .pt-md-3 {
                padding-top: 1rem !important
            }

            .pt-md-4 {
                padding-top: 1.5rem !important
            }

            .pt-md-5 {
                padding-top: 3rem !important
            }

            .pe-md-0 {
                padding-right: 0 !important
            }

            .pe-md-1 {
                padding-right: .25rem !important
            }

            .pe-md-2 {
                padding-right: .5rem !important
            }

            .pe-md-3 {
                padding-right: 1rem !important
            }

            .pe-md-4 {
                padding-right: 1.5rem !important
            }

            .pe-md-5 {
                padding-right: 3rem !important
            }

            .pb-md-0 {
                padding-bottom: 0 !important
            }

            .pb-md-1 {
                padding-bottom: .25rem !important
            }

            .pb-md-2 {
                padding-bottom: .5rem !important
            }

            .pb-md-3 {
                padding-bottom: 1rem !important
            }

            .pb-md-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-md-5 {
                padding-bottom: 3rem !important
            }

            .ps-md-0 {
                padding-left: 0 !important
            }

            .ps-md-1 {
                padding-left: .25rem !important
            }

            .ps-md-2 {
                padding-left: .5rem !important
            }

            .ps-md-3 {
                padding-left: 1rem !important
            }

            .ps-md-4 {
                padding-left: 1.5rem !important
            }

            .ps-md-5 {
                padding-left: 3rem !important
            }

            .text-md-start {
                text-align: left !important
            }

            .text-md-end {
                text-align: right !important
            }

            .text-md-center {
                text-align: center !important
            }
        }

        @media (min-width:992px) {
            .float-lg-start {
                float: left !important
            }

            .float-lg-end {
                float: right !important
            }

            .float-lg-none {
                float: none !important
            }

            .d-lg-inline {
                display: inline !important
            }

            .d-lg-inline-block {
                display: inline-block !important
            }

            .d-lg-block {
                display: block !important
            }

            .d-lg-grid {
                display: grid !important
            }

            .d-lg-table {
                display: table !important
            }

            .d-lg-table-row {
                display: table-row !important
            }

            .d-lg-table-cell {
                display: table-cell !important
            }

            .d-lg-flex {
                display: flex !important
            }

            .d-lg-inline-flex {
                display: inline-flex !important
            }

            .d-lg-none {
                display: none !important
            }

            .flex-lg-fill {
                flex: 1 1 auto !important
            }

            .flex-lg-row {
                flex-direction: row !important
            }

            .flex-lg-column {
                flex-direction: column !important
            }

            .flex-lg-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-lg-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-lg-grow-0 {
                flex-grow: 0 !important
            }

            .flex-lg-grow-1 {
                flex-grow: 1 !important
            }

            .flex-lg-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-lg-shrink-1 {
                flex-shrink: 1 !important
            }

            .flex-lg-wrap {
                flex-wrap: wrap !important
            }

            .flex-lg-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-lg-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .gap-lg-0 {
                gap: 0 !important
            }

            .gap-lg-1 {
                gap: .25rem !important
            }

            .gap-lg-2 {
                gap: .5rem !important
            }

            .gap-lg-3 {
                gap: 1rem !important
            }

            .gap-lg-4 {
                gap: 1.5rem !important
            }

            .gap-lg-5 {
                gap: 3rem !important
            }

            .justify-content-lg-start {
                justify-content: flex-start !important
            }

            .justify-content-lg-end {
                justify-content: flex-end !important
            }

            .justify-content-lg-center {
                justify-content: center !important
            }

            .justify-content-lg-between {
                justify-content: space-between !important
            }

            .justify-content-lg-around {
                justify-content: space-around !important
            }

            .justify-content-lg-evenly {
                justify-content: space-evenly !important
            }

            .align-items-lg-start {
                align-items: flex-start !important
            }

            .align-items-lg-end {
                align-items: flex-end !important
            }

            .align-items-lg-center {
                align-items: center !important
            }

            .align-items-lg-baseline {
                align-items: baseline !important
            }

            .align-items-lg-stretch {
                align-items: stretch !important
            }

            .align-content-lg-start {
                align-content: flex-start !important
            }

            .align-content-lg-end {
                align-content: flex-end !important
            }

            .align-content-lg-center {
                align-content: center !important
            }

            .align-content-lg-between {
                align-content: space-between !important
            }

            .align-content-lg-around {
                align-content: space-around !important
            }

            .align-content-lg-stretch {
                align-content: stretch !important
            }

            .align-self-lg-auto {
                align-self: auto !important
            }

            .align-self-lg-start {
                align-self: flex-start !important
            }

            .align-self-lg-end {
                align-self: flex-end !important
            }

            .align-self-lg-center {
                align-self: center !important
            }

            .align-self-lg-baseline {
                align-self: baseline !important
            }

            .align-self-lg-stretch {
                align-self: stretch !important
            }

            .order-lg-first {
                order: -1 !important
            }

            .order-lg-0 {
                order: 0 !important
            }

            .order-lg-1 {
                order: 1 !important
            }

            .order-lg-2 {
                order: 2 !important
            }

            .order-lg-3 {
                order: 3 !important
            }

            .order-lg-4 {
                order: 4 !important
            }

            .order-lg-5 {
                order: 5 !important
            }

            .order-lg-last {
                order: 6 !important
            }

            .m-lg-0 {
                margin: 0 !important
            }

            .m-lg-1 {
                margin: .25rem !important
            }

            .m-lg-2 {
                margin: .5rem !important
            }

            .m-lg-3 {
                margin: 1rem !important
            }

            .m-lg-4 {
                margin: 1.5rem !important
            }

            .m-lg-5 {
                margin: 3rem !important
            }

            .m-lg-auto {
                margin: auto !important
            }

            .mx-lg-0 {
                margin-left: 0 !important;
                margin-right: 0 !important
            }

            .mx-lg-1 {
                margin-left: .25rem !important;
                margin-right: .25rem !important
            }

            .mx-lg-2 {
                margin-left: .5rem !important;
                margin-right: .5rem !important
            }

            .mx-lg-3 {
                margin-left: 1rem !important;
                margin-right: 1rem !important
            }

            .mx-lg-4 {
                margin-left: 1.5rem !important;
                margin-right: 1.5rem !important
            }

            .mx-lg-5 {
                margin-left: 3rem !important;
                margin-right: 3rem !important
            }

            .mx-lg-auto {
                margin-left: auto !important;
                margin-right: auto !important
            }

            .my-lg-0 {
                margin-bottom: 0 !important;
                margin-top: 0 !important
            }

            .my-lg-1 {
                margin-bottom: .25rem !important;
                margin-top: .25rem !important
            }

            .my-lg-2 {
                margin-bottom: .5rem !important;
                margin-top: .5rem !important
            }

            .my-lg-3 {
                margin-bottom: 1rem !important;
                margin-top: 1rem !important
            }

            .my-lg-4 {
                margin-bottom: 1.5rem !important;
                margin-top: 1.5rem !important
            }

            .my-lg-5 {
                margin-bottom: 3rem !important;
                margin-top: 3rem !important
            }

            .my-lg-auto {
                margin-bottom: auto !important;
                margin-top: auto !important
            }

            .mt-lg-0 {
                margin-top: 0 !important
            }

            .mt-lg-1 {
                margin-top: .25rem !important
            }

            .mt-lg-2 {
                margin-top: .5rem !important
            }

            .mt-lg-3 {
                margin-top: 1rem !important
            }

            .mt-lg-4 {
                margin-top: 1.5rem !important
            }

            .mt-lg-5 {
                margin-top: 3rem !important
            }

            .mt-lg-auto {
                margin-top: auto !important
            }

            .me-lg-0 {
                margin-right: 0 !important
            }

            .me-lg-1 {
                margin-right: .25rem !important
            }

            .me-lg-2 {
                margin-right: .5rem !important
            }

            .me-lg-3 {
                margin-right: 1rem !important
            }

            .me-lg-4 {
                margin-right: 1.5rem !important
            }

            .me-lg-5 {
                margin-right: 3rem !important
            }

            .me-lg-auto {
                margin-right: auto !important
            }

            .mb-lg-0 {
                margin-bottom: 0 !important
            }

            .mb-lg-1 {
                margin-bottom: .25rem !important
            }

            .mb-lg-2 {
                margin-bottom: .5rem !important
            }

            .mb-lg-3 {
                margin-bottom: 1rem !important
            }

            .mb-lg-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-lg-5 {
                margin-bottom: 3rem !important
            }

            .mb-lg-auto {
                margin-bottom: auto !important
            }

            .ms-lg-0 {
                margin-left: 0 !important
            }

            .ms-lg-1 {
                margin-left: .25rem !important
            }

            .ms-lg-2 {
                margin-left: .5rem !important
            }

            .ms-lg-3 {
                margin-left: 1rem !important
            }

            .ms-lg-4 {
                margin-left: 1.5rem !important
            }

            .ms-lg-5 {
                margin-left: 3rem !important
            }

            .ms-lg-auto {
                margin-left: auto !important
            }

            .p-lg-0 {
                padding: 0 !important
            }

            .p-lg-1 {
                padding: .25rem !important
            }

            .p-lg-2 {
                padding: .5rem !important
            }

            .p-lg-3 {
                padding: 1rem !important
            }

            .p-lg-4 {
                padding: 1.5rem !important
            }

            .p-lg-5 {
                padding: 3rem !important
            }

            .px-lg-0 {
                padding-left: 0 !important;
                padding-right: 0 !important
            }

            .px-lg-1 {
                padding-left: .25rem !important;
                padding-right: .25rem !important
            }

            .px-lg-2 {
                padding-left: .5rem !important;
                padding-right: .5rem !important
            }

            .px-lg-3 {
                padding-left: 1rem !important;
                padding-right: 1rem !important
            }

            .px-lg-4 {
                padding-left: 1.5rem !important;
                padding-right: 1.5rem !important
            }

            .px-lg-5 {
                padding-left: 3rem !important;
                padding-right: 3rem !important
            }

            .py-lg-0 {
                padding-bottom: 0 !important;
                padding-top: 0 !important
            }

            .py-lg-1 {
                padding-bottom: .25rem !important;
                padding-top: .25rem !important
            }

            .py-lg-2 {
                padding-bottom: .5rem !important;
                padding-top: .5rem !important
            }

            .py-lg-3 {
                padding-bottom: 1rem !important;
                padding-top: 1rem !important
            }

            .py-lg-4 {
                padding-bottom: 1.5rem !important;
                padding-top: 1.5rem !important
            }

            .py-lg-5 {
                padding-bottom: 3rem !important;
                padding-top: 3rem !important
            }

            .pt-lg-0 {
                padding-top: 0 !important
            }

            .pt-lg-1 {
                padding-top: .25rem !important
            }

            .pt-lg-2 {
                padding-top: .5rem !important
            }

            .pt-lg-3 {
                padding-top: 1rem !important
            }

            .pt-lg-4 {
                padding-top: 1.5rem !important
            }

            .pt-lg-5 {
                padding-top: 3rem !important
            }

            .pe-lg-0 {
                padding-right: 0 !important
            }

            .pe-lg-1 {
                padding-right: .25rem !important
            }

            .pe-lg-2 {
                padding-right: .5rem !important
            }

            .pe-lg-3 {
                padding-right: 1rem !important
            }

            .pe-lg-4 {
                padding-right: 1.5rem !important
            }

            .pe-lg-5 {
                padding-right: 3rem !important
            }

            .pb-lg-0 {
                padding-bottom: 0 !important
            }

            .pb-lg-1 {
                padding-bottom: .25rem !important
            }

            .pb-lg-2 {
                padding-bottom: .5rem !important
            }

            .pb-lg-3 {
                padding-bottom: 1rem !important
            }

            .pb-lg-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-lg-5 {
                padding-bottom: 3rem !important
            }

            .ps-lg-0 {
                padding-left: 0 !important
            }

            .ps-lg-1 {
                padding-left: .25rem !important
            }

            .ps-lg-2 {
                padding-left: .5rem !important
            }

            .ps-lg-3 {
                padding-left: 1rem !important
            }

            .ps-lg-4 {
                padding-left: 1.5rem !important
            }

            .ps-lg-5 {
                padding-left: 3rem !important
            }

            .text-lg-start {
                text-align: left !important
            }

            .text-lg-end {
                text-align: right !important
            }

            .text-lg-center {
                text-align: center !important
            }
        }

        @media (min-width:1200px) {
            .float-xl-start {
                float: left !important
            }

            .float-xl-end {
                float: right !important
            }

            .float-xl-none {
                float: none !important
            }

            .d-xl-inline {
                display: inline !important
            }

            .d-xl-inline-block {
                display: inline-block !important
            }

            .d-xl-block {
                display: block !important
            }

            .d-xl-grid {
                display: grid !important
            }

            .d-xl-table {
                display: table !important
            }

            .d-xl-table-row {
                display: table-row !important
            }

            .d-xl-table-cell {
                display: table-cell !important
            }

            .d-xl-flex {
                display: flex !important
            }

            .d-xl-inline-flex {
                display: inline-flex !important
            }

            .d-xl-none {
                display: none !important
            }

            .flex-xl-fill {
                flex: 1 1 auto !important
            }

            .flex-xl-row {
                flex-direction: row !important
            }

            .flex-xl-column {
                flex-direction: column !important
            }

            .flex-xl-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-xl-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-xl-grow-0 {
                flex-grow: 0 !important
            }

            .flex-xl-grow-1 {
                flex-grow: 1 !important
            }

            .flex-xl-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-xl-shrink-1 {
                flex-shrink: 1 !important
            }

            .flex-xl-wrap {
                flex-wrap: wrap !important
            }

            .flex-xl-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-xl-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .gap-xl-0 {
                gap: 0 !important
            }

            .gap-xl-1 {
                gap: .25rem !important
            }

            .gap-xl-2 {
                gap: .5rem !important
            }

            .gap-xl-3 {
                gap: 1rem !important
            }

            .gap-xl-4 {
                gap: 1.5rem !important
            }

            .gap-xl-5 {
                gap: 3rem !important
            }

            .justify-content-xl-start {
                justify-content: flex-start !important
            }

            .justify-content-xl-end {
                justify-content: flex-end !important
            }

            .justify-content-xl-center {
                justify-content: center !important
            }

            .justify-content-xl-between {
                justify-content: space-between !important
            }

            .justify-content-xl-around {
                justify-content: space-around !important
            }

            .justify-content-xl-evenly {
                justify-content: space-evenly !important
            }

            .align-items-xl-start {
                align-items: flex-start !important
            }

            .align-items-xl-end {
                align-items: flex-end !important
            }

            .align-items-xl-center {
                align-items: center !important
            }

            .align-items-xl-baseline {
                align-items: baseline !important
            }

            .align-items-xl-stretch {
                align-items: stretch !important
            }

            .align-content-xl-start {
                align-content: flex-start !important
            }

            .align-content-xl-end {
                align-content: flex-end !important
            }

            .align-content-xl-center {
                align-content: center !important
            }

            .align-content-xl-between {
                align-content: space-between !important
            }

            .align-content-xl-around {
                align-content: space-around !important
            }

            .align-content-xl-stretch {
                align-content: stretch !important
            }

            .align-self-xl-auto {
                align-self: auto !important
            }

            .align-self-xl-start {
                align-self: flex-start !important
            }

            .align-self-xl-end {
                align-self: flex-end !important
            }

            .align-self-xl-center {
                align-self: center !important
            }

            .align-self-xl-baseline {
                align-self: baseline !important
            }

            .align-self-xl-stretch {
                align-self: stretch !important
            }

            .order-xl-first {
                order: -1 !important
            }

            .order-xl-0 {
                order: 0 !important
            }

            .order-xl-1 {
                order: 1 !important
            }

            .order-xl-2 {
                order: 2 !important
            }

            .order-xl-3 {
                order: 3 !important
            }

            .order-xl-4 {
                order: 4 !important
            }

            .order-xl-5 {
                order: 5 !important
            }

            .order-xl-last {
                order: 6 !important
            }

            .m-xl-0 {
                margin: 0 !important
            }

            .m-xl-1 {
                margin: .25rem !important
            }

            .m-xl-2 {
                margin: .5rem !important
            }

            .m-xl-3 {
                margin: 1rem !important
            }

            .m-xl-4 {
                margin: 1.5rem !important
            }

            .m-xl-5 {
                margin: 3rem !important
            }

            .m-xl-auto {
                margin: auto !important
            }

            .mx-xl-0 {
                margin-left: 0 !important;
                margin-right: 0 !important
            }

            .mx-xl-1 {
                margin-left: .25rem !important;
                margin-right: .25rem !important
            }

            .mx-xl-2 {
                margin-left: .5rem !important;
                margin-right: .5rem !important
            }

            .mx-xl-3 {
                margin-left: 1rem !important;
                margin-right: 1rem !important
            }

            .mx-xl-4 {
                margin-left: 1.5rem !important;
                margin-right: 1.5rem !important
            }

            .mx-xl-5 {
                margin-left: 3rem !important;
                margin-right: 3rem !important
            }

            .mx-xl-auto {
                margin-left: auto !important;
                margin-right: auto !important
            }

            .my-xl-0 {
                margin-bottom: 0 !important;
                margin-top: 0 !important
            }

            .my-xl-1 {
                margin-bottom: .25rem !important;
                margin-top: .25rem !important
            }

            .my-xl-2 {
                margin-bottom: .5rem !important;
                margin-top: .5rem !important
            }

            .my-xl-3 {
                margin-bottom: 1rem !important;
                margin-top: 1rem !important
            }

            .my-xl-4 {
                margin-bottom: 1.5rem !important;
                margin-top: 1.5rem !important
            }

            .my-xl-5 {
                margin-bottom: 3rem !important;
                margin-top: 3rem !important
            }

            .my-xl-auto {
                margin-bottom: auto !important;
                margin-top: auto !important
            }

            .mt-xl-0 {
                margin-top: 0 !important
            }

            .mt-xl-1 {
                margin-top: .25rem !important
            }

            .mt-xl-2 {
                margin-top: .5rem !important
            }

            .mt-xl-3 {
                margin-top: 1rem !important
            }

            .mt-xl-4 {
                margin-top: 1.5rem !important
            }

            .mt-xl-5 {
                margin-top: 3rem !important
            }

            .mt-xl-auto {
                margin-top: auto !important
            }

            .me-xl-0 {
                margin-right: 0 !important
            }

            .me-xl-1 {
                margin-right: .25rem !important
            }

            .me-xl-2 {
                margin-right: .5rem !important
            }

            .me-xl-3 {
                margin-right: 1rem !important
            }

            .me-xl-4 {
                margin-right: 1.5rem !important
            }

            .me-xl-5 {
                margin-right: 3rem !important
            }

            .me-xl-auto {
                margin-right: auto !important
            }

            .mb-xl-0 {
                margin-bottom: 0 !important
            }

            .mb-xl-1 {
                margin-bottom: .25rem !important
            }

            .mb-xl-2 {
                margin-bottom: .5rem !important
            }

            .mb-xl-3 {
                margin-bottom: 1rem !important
            }

            .mb-xl-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-xl-5 {
                margin-bottom: 3rem !important
            }

            .mb-xl-auto {
                margin-bottom: auto !important
            }

            .ms-xl-0 {
                margin-left: 0 !important
            }

            .ms-xl-1 {
                margin-left: .25rem !important
            }

            .ms-xl-2 {
                margin-left: .5rem !important
            }

            .ms-xl-3 {
                margin-left: 1rem !important
            }

            .ms-xl-4 {
                margin-left: 1.5rem !important
            }

            .ms-xl-5 {
                margin-left: 3rem !important
            }

            .ms-xl-auto {
                margin-left: auto !important
            }

            .p-xl-0 {
                padding: 0 !important
            }

            .p-xl-1 {
                padding: .25rem !important
            }

            .p-xl-2 {
                padding: .5rem !important
            }

            .p-xl-3 {
                padding: 1rem !important
            }

            .p-xl-4 {
                padding: 1.5rem !important
            }

            .p-xl-5 {
                padding: 3rem !important
            }

            .px-xl-0 {
                padding-left: 0 !important;
                padding-right: 0 !important
            }

            .px-xl-1 {
                padding-left: .25rem !important;
                padding-right: .25rem !important
            }

            .px-xl-2 {
                padding-left: .5rem !important;
                padding-right: .5rem !important
            }

            .px-xl-3 {
                padding-left: 1rem !important;
                padding-right: 1rem !important
            }

            .px-xl-4 {
                padding-left: 1.5rem !important;
                padding-right: 1.5rem !important
            }

            .px-xl-5 {
                padding-left: 3rem !important;
                padding-right: 3rem !important
            }

            .py-xl-0 {
                padding-bottom: 0 !important;
                padding-top: 0 !important
            }

            .py-xl-1 {
                padding-bottom: .25rem !important;
                padding-top: .25rem !important
            }

            .py-xl-2 {
                padding-bottom: .5rem !important;
                padding-top: .5rem !important
            }

            .py-xl-3 {
                padding-bottom: 1rem !important;
                padding-top: 1rem !important
            }

            .py-xl-4 {
                padding-bottom: 1.5rem !important;
                padding-top: 1.5rem !important
            }

            .py-xl-5 {
                padding-bottom: 3rem !important;
                padding-top: 3rem !important
            }

            .pt-xl-0 {
                padding-top: 0 !important
            }

            .pt-xl-1 {
                padding-top: .25rem !important
            }

            .pt-xl-2 {
                padding-top: .5rem !important
            }

            .pt-xl-3 {
                padding-top: 1rem !important
            }

            .pt-xl-4 {
                padding-top: 1.5rem !important
            }

            .pt-xl-5 {
                padding-top: 3rem !important
            }

            .pe-xl-0 {
                padding-right: 0 !important
            }

            .pe-xl-1 {
                padding-right: .25rem !important
            }

            .pe-xl-2 {
                padding-right: .5rem !important
            }

            .pe-xl-3 {
                padding-right: 1rem !important
            }

            .pe-xl-4 {
                padding-right: 1.5rem !important
            }

            .pe-xl-5 {
                padding-right: 3rem !important
            }

            .pb-xl-0 {
                padding-bottom: 0 !important
            }

            .pb-xl-1 {
                padding-bottom: .25rem !important
            }

            .pb-xl-2 {
                padding-bottom: .5rem !important
            }

            .pb-xl-3 {
                padding-bottom: 1rem !important
            }

            .pb-xl-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-xl-5 {
                padding-bottom: 3rem !important
            }

            .ps-xl-0 {
                padding-left: 0 !important
            }

            .ps-xl-1 {
                padding-left: .25rem !important
            }

            .ps-xl-2 {
                padding-left: .5rem !important
            }

            .ps-xl-3 {
                padding-left: 1rem !important
            }

            .ps-xl-4 {
                padding-left: 1.5rem !important
            }

            .ps-xl-5 {
                padding-left: 3rem !important
            }

            .text-xl-start {
                text-align: left !important
            }

            .text-xl-end {
                text-align: right !important
            }

            .text-xl-center {
                text-align: center !important
            }
        }

        @media (min-width:1400px) {
            .float-xxl-start {
                float: left !important
            }

            .float-xxl-end {
                float: right !important
            }

            .float-xxl-none {
                float: none !important
            }

            .d-xxl-inline {
                display: inline !important
            }

            .d-xxl-inline-block {
                display: inline-block !important
            }

            .d-xxl-block {
                display: block !important
            }

            .d-xxl-grid {
                display: grid !important
            }

            .d-xxl-table {
                display: table !important
            }

            .d-xxl-table-row {
                display: table-row !important
            }

            .d-xxl-table-cell {
                display: table-cell !important
            }

            .d-xxl-flex {
                display: flex !important
            }

            .d-xxl-inline-flex {
                display: inline-flex !important
            }

            .d-xxl-none {
                display: none !important
            }

            .flex-xxl-fill {
                flex: 1 1 auto !important
            }

            .flex-xxl-row {
                flex-direction: row !important
            }

            .flex-xxl-column {
                flex-direction: column !important
            }

            .flex-xxl-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-xxl-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-xxl-grow-0 {
                flex-grow: 0 !important
            }

            .flex-xxl-grow-1 {
                flex-grow: 1 !important
            }

            .flex-xxl-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-xxl-shrink-1 {
                flex-shrink: 1 !important
            }

            .flex-xxl-wrap {
                flex-wrap: wrap !important
            }

            .flex-xxl-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-xxl-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .gap-xxl-0 {
                gap: 0 !important
            }

            .gap-xxl-1 {
                gap: .25rem !important
            }

            .gap-xxl-2 {
                gap: .5rem !important
            }

            .gap-xxl-3 {
                gap: 1rem !important
            }

            .gap-xxl-4 {
                gap: 1.5rem !important
            }

            .gap-xxl-5 {
                gap: 3rem !important
            }

            .justify-content-xxl-start {
                justify-content: flex-start !important
            }

            .justify-content-xxl-end {
                justify-content: flex-end !important
            }

            .justify-content-xxl-center {
                justify-content: center !important
            }

            .justify-content-xxl-between {
                justify-content: space-between !important
            }

            .justify-content-xxl-around {
                justify-content: space-around !important
            }

            .justify-content-xxl-evenly {
                justify-content: space-evenly !important
            }

            .align-items-xxl-start {
                align-items: flex-start !important
            }

            .align-items-xxl-end {
                align-items: flex-end !important
            }

            .align-items-xxl-center {
                align-items: center !important
            }

            .align-items-xxl-baseline {
                align-items: baseline !important
            }

            .align-items-xxl-stretch {
                align-items: stretch !important
            }

            .align-content-xxl-start {
                align-content: flex-start !important
            }

            .align-content-xxl-end {
                align-content: flex-end !important
            }

            .align-content-xxl-center {
                align-content: center !important
            }

            .align-content-xxl-between {
                align-content: space-between !important
            }

            .align-content-xxl-around {
                align-content: space-around !important
            }

            .align-content-xxl-stretch {
                align-content: stretch !important
            }

            .align-self-xxl-auto {
                align-self: auto !important
            }

            .align-self-xxl-start {
                align-self: flex-start !important
            }

            .align-self-xxl-end {
                align-self: flex-end !important
            }

            .align-self-xxl-center {
                align-self: center !important
            }

            .align-self-xxl-baseline {
                align-self: baseline !important
            }

            .align-self-xxl-stretch {
                align-self: stretch !important
            }

            .order-xxl-first {
                order: -1 !important
            }

            .order-xxl-0 {
                order: 0 !important
            }

            .order-xxl-1 {
                order: 1 !important
            }

            .order-xxl-2 {
                order: 2 !important
            }

            .order-xxl-3 {
                order: 3 !important
            }

            .order-xxl-4 {
                order: 4 !important
            }

            .order-xxl-5 {
                order: 5 !important
            }

            .order-xxl-last {
                order: 6 !important
            }

            .m-xxl-0 {
                margin: 0 !important
            }

            .m-xxl-1 {
                margin: .25rem !important
            }

            .m-xxl-2 {
                margin: .5rem !important
            }

            .m-xxl-3 {
                margin: 1rem !important
            }

            .m-xxl-4 {
                margin: 1.5rem !important
            }

            .m-xxl-5 {
                margin: 3rem !important
            }

            .m-xxl-auto {
                margin: auto !important
            }

            .mx-xxl-0 {
                margin-left: 0 !important;
                margin-right: 0 !important
            }

            .mx-xxl-1 {
                margin-left: .25rem !important;
                margin-right: .25rem !important
            }

            .mx-xxl-2 {
                margin-left: .5rem !important;
                margin-right: .5rem !important
            }

            .mx-xxl-3 {
                margin-left: 1rem !important;
                margin-right: 1rem !important
            }

            .mx-xxl-4 {
                margin-left: 1.5rem !important;
                margin-right: 1.5rem !important
            }

            .mx-xxl-5 {
                margin-left: 3rem !important;
                margin-right: 3rem !important
            }

            .mx-xxl-auto {
                margin-left: auto !important;
                margin-right: auto !important
            }

            .my-xxl-0 {
                margin-bottom: 0 !important;
                margin-top: 0 !important
            }

            .my-xxl-1 {
                margin-bottom: .25rem !important;
                margin-top: .25rem !important
            }

            .my-xxl-2 {
                margin-bottom: .5rem !important;
                margin-top: .5rem !important
            }

            .my-xxl-3 {
                margin-bottom: 1rem !important;
                margin-top: 1rem !important
            }

            .my-xxl-4 {
                margin-bottom: 1.5rem !important;
                margin-top: 1.5rem !important
            }

            .my-xxl-5 {
                margin-bottom: 3rem !important;
                margin-top: 3rem !important
            }

            .my-xxl-auto {
                margin-bottom: auto !important;
                margin-top: auto !important
            }

            .mt-xxl-0 {
                margin-top: 0 !important
            }

            .mt-xxl-1 {
                margin-top: .25rem !important
            }

            .mt-xxl-2 {
                margin-top: .5rem !important
            }

            .mt-xxl-3 {
                margin-top: 1rem !important
            }

            .mt-xxl-4 {
                margin-top: 1.5rem !important
            }

            .mt-xxl-5 {
                margin-top: 3rem !important
            }

            .mt-xxl-auto {
                margin-top: auto !important
            }

            .me-xxl-0 {
                margin-right: 0 !important
            }

            .me-xxl-1 {
                margin-right: .25rem !important
            }

            .me-xxl-2 {
                margin-right: .5rem !important
            }

            .me-xxl-3 {
                margin-right: 1rem !important
            }

            .me-xxl-4 {
                margin-right: 1.5rem !important
            }

            .me-xxl-5 {
                margin-right: 3rem !important
            }

            .me-xxl-auto {
                margin-right: auto !important
            }

            .mb-xxl-0 {
                margin-bottom: 0 !important
            }

            .mb-xxl-1 {
                margin-bottom: .25rem !important
            }

            .mb-xxl-2 {
                margin-bottom: .5rem !important
            }

            .mb-xxl-3 {
                margin-bottom: 1rem !important
            }

            .mb-xxl-4 {
                margin-bottom: 1.5rem !important
            }

            .mb-xxl-5 {
                margin-bottom: 3rem !important
            }

            .mb-xxl-auto {
                margin-bottom: auto !important
            }

            .ms-xxl-0 {
                margin-left: 0 !important
            }

            .ms-xxl-1 {
                margin-left: .25rem !important
            }

            .ms-xxl-2 {
                margin-left: .5rem !important
            }

            .ms-xxl-3 {
                margin-left: 1rem !important
            }

            .ms-xxl-4 {
                margin-left: 1.5rem !important
            }

            .ms-xxl-5 {
                margin-left: 3rem !important
            }

            .ms-xxl-auto {
                margin-left: auto !important
            }

            .p-xxl-0 {
                padding: 0 !important
            }

            .p-xxl-1 {
                padding: .25rem !important
            }

            .p-xxl-2 {
                padding: .5rem !important
            }

            .p-xxl-3 {
                padding: 1rem !important
            }

            .p-xxl-4 {
                padding: 1.5rem !important
            }

            .p-xxl-5 {
                padding: 3rem !important
            }

            .px-xxl-0 {
                padding-left: 0 !important;
                padding-right: 0 !important
            }

            .px-xxl-1 {
                padding-left: .25rem !important;
                padding-right: .25rem !important
            }

            .px-xxl-2 {
                padding-left: .5rem !important;
                padding-right: .5rem !important
            }

            .px-xxl-3 {
                padding-left: 1rem !important;
                padding-right: 1rem !important
            }

            .px-xxl-4 {
                padding-left: 1.5rem !important;
                padding-right: 1.5rem !important
            }

            .px-xxl-5 {
                padding-left: 3rem !important;
                padding-right: 3rem !important
            }

            .py-xxl-0 {
                padding-bottom: 0 !important;
                padding-top: 0 !important
            }

            .py-xxl-1 {
                padding-bottom: .25rem !important;
                padding-top: .25rem !important
            }

            .py-xxl-2 {
                padding-bottom: .5rem !important;
                padding-top: .5rem !important
            }

            .py-xxl-3 {
                padding-bottom: 1rem !important;
                padding-top: 1rem !important
            }

            .py-xxl-4 {
                padding-bottom: 1.5rem !important;
                padding-top: 1.5rem !important
            }

            .py-xxl-5 {
                padding-bottom: 3rem !important;
                padding-top: 3rem !important
            }

            .pt-xxl-0 {
                padding-top: 0 !important
            }

            .pt-xxl-1 {
                padding-top: .25rem !important
            }

            .pt-xxl-2 {
                padding-top: .5rem !important
            }

            .pt-xxl-3 {
                padding-top: 1rem !important
            }

            .pt-xxl-4 {
                padding-top: 1.5rem !important
            }

            .pt-xxl-5 {
                padding-top: 3rem !important
            }

            .pe-xxl-0 {
                padding-right: 0 !important
            }

            .pe-xxl-1 {
                padding-right: .25rem !important
            }

            .pe-xxl-2 {
                padding-right: .5rem !important
            }

            .pe-xxl-3 {
                padding-right: 1rem !important
            }

            .pe-xxl-4 {
                padding-right: 1.5rem !important
            }

            .pe-xxl-5 {
                padding-right: 3rem !important
            }

            .pb-xxl-0 {
                padding-bottom: 0 !important
            }

            .pb-xxl-1 {
                padding-bottom: .25rem !important
            }

            .pb-xxl-2 {
                padding-bottom: .5rem !important
            }

            .pb-xxl-3 {
                padding-bottom: 1rem !important
            }

            .pb-xxl-4 {
                padding-bottom: 1.5rem !important
            }

            .pb-xxl-5 {
                padding-bottom: 3rem !important
            }

            .ps-xxl-0 {
                padding-left: 0 !important
            }

            .ps-xxl-1 {
                padding-left: .25rem !important
            }

            .ps-xxl-2 {
                padding-left: .5rem !important
            }

            .ps-xxl-3 {
                padding-left: 1rem !important
            }

            .ps-xxl-4 {
                padding-left: 1.5rem !important
            }

            .ps-xxl-5 {
                padding-left: 3rem !important
            }

            .text-xxl-start {
                text-align: left !important
            }

            .text-xxl-end {
                text-align: right !important
            }

            .text-xxl-center {
                text-align: center !important
            }
        }

        @media (min-width:1200px) {
            .fs-1 {
                font-size: 2.5rem !important
            }

            .fs-2 {
                font-size: 2rem !important
            }

            .fs-3 {
                font-size: 1.75rem !important
            }

            .fs-4 {
                font-size: 1.5rem !important
            }
        }

        @media print {
            .d-print-inline {
                display: inline !important
            }

            .d-print-inline-block {
                display: inline-block !important
            }

            .d-print-block {
                display: block !important
            }

            .d-print-grid {
                display: grid !important
            }

            .d-print-table {
                display: table !important
            }

            .d-print-table-row {
                display: table-row !important
            }

            .d-print-table-cell {
                display: table-cell !important
            }

            .d-print-flex {
                display: flex !important
            }

            .d-print-inline-flex {
                display: inline-flex !important
            }

            .d-print-none {
                display: none !important
            }
        }
    </style>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body,
        html {
            height: 100%;
            font-family: Arial, sans-serif;
        }

        a {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
            transition: all 0.4s;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
        }

        a:focus {
            outline: none !important;
        }

        a:hover {
            text-decoration: none;
            color: #6a7dfe;
            color: -webkit-linear-gradient(left, #21d4fd, #b721ff);
            color: -o-linear-gradient(left, #21d4fd, #b721ff);
            color: -moz-linear-gradient(left, #21d4fd, #b721ff);
            color: linear-gradient(left, #21d4fd, #b721ff);
        }


        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0px;
        }

        p {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            line-height: 1.7;
            color: #666666;
            margin: 0px;
        }

        ul,
        li {
            margin: 0px;
            list-style-type: none;
        }


        /*---------------------------------------------*/

        input {
            outline: none;
            border: none;
        }

        textarea {
            outline: none;
            border: none;
        }

        textarea:focus,
        input:focus {
            border-color: transparent !important;
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        input:focus:-moz-placeholder {
            color: transparent;
        }

        input:focus::-moz-placeholder {
            color: transparent;
        }

        input:focus:-ms-input-placeholder {
            color: transparent;
        }

        textarea:focus::-webkit-input-placeholder {
            color: transparent;
        }

        textarea:focus:-moz-placeholder {
            color: transparent;
        }

        textarea:focus::-moz-placeholder {
            color: transparent;
        }

        textarea:focus:-ms-input-placeholder {
            color: transparent;
        }

        input::-webkit-input-placeholder {
            color: #adadad;
        }

        input:-moz-placeholder {
            color: #adadad;
        }

        input::-moz-placeholder {
            color: #adadad;
        }

        input:-ms-input-placeholder {
            color: #adadad;
        }

        textarea::-webkit-input-placeholder {
            color: #adadad;
        }

        textarea:-moz-placeholder {
            color: #adadad;
        }

        textarea::-moz-placeholder {
            color: #adadad;
        }

        textarea:-ms-input-placeholder {
            color: #adadad;
        }


        /*---------------------------------------------*/

        button {
            outline: none !important;
            border: none;
            background: transparent;
        }

        button:hover {
            cursor: pointer;
        }

        iframe {
            border: none !important;
        }

        .txt1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            color: #666666;
            line-height: 1.5;
        }

        .txt2 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            color: #333333;
            line-height: 1.5;
        }

        .limiter {
            width: 100%;
            margin: 0 auto;
        }

        .container-login100 {
            width: 100%;
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;
            background: #f2f2f2;
        }

        .wrap-login100 {
            width: 390px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            padding: 77px 55px 33px 55px;
            box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
            -o-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .login100-form {
            width: 100%;
        }

        .login100-form-title {
            display: block;
            font-family: Arial;
            font-weight: bold;
            font-size: 30px;
            color: #333333;
            line-height: 1.2;
            text-align: center;
        }

        .login100-form-title i {
            font-size: 60px;
        }

        .wrap-input100 {
            width: 100%;
            position: relative;
            border-bottom: 2px solid #adadad;
            margin-bottom: 37px;
        }

        .input100 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            color: #555555;
            line-height: 1.2;
            display: block;
            width: 100%;
            height: 45px;
            background: transparent;
            padding: 0 5px;
        }


        /*---------------------------------------------*/

        .focus-input100 {
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
        }

        .focus-input100::before {
            content: "";
            display: block;
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
            background: #6a7dfe;
            background: -webkit-linear-gradient(left, #21d4fd, #b721ff);
            background: -o-linear-gradient(left, #21d4fd, #b721ff);
            background: -moz-linear-gradient(left, #21d4fd, #b721ff);
            background: linear-gradient(left, #21d4fd, #b721ff);
        }

        .focus-input100::after {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            color: #999999;
            line-height: 1.2;
            content: attr(data-placeholder);
            display: block;
            width: 100%;
            position: absolute;
            top: 16px;
            left: 0px;
            padding-left: 5px;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .input100:focus+.focus-input100::after {
            top: -15px;
        }

        .input100:focus+.focus-input100::before {
            width: 100%;
        }

        .has-val.input100+.focus-input100::after {
            top: -15px;
        }

        .has-val.input100+.focus-input100::before {
            width: 100%;
        }


        /*---------------------------------------------*/

        .btn-show-pass {
            font-size: 15px;
            color: #999999;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            position: absolute;
            height: 100%;
            top: 0;
            right: 0;
            padding-right: 15px;
            cursor: pointer;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .btn-show-pass:hover {
            color: #6a7dfe;
            color: -webkit-linear-gradient(left, #21d4fd, #b721ff);
            color: -o-linear-gradient(left, #21d4fd, #b721ff);
            color: -moz-linear-gradient(left, #21d4fd, #b721ff);
            color: linear-gradient(left, #21d4fd, #b721ff);
        }

        .btn-show-pass.active {
            color: #6a7dfe;
            color: -webkit-linear-gradient(left, #21d4fd, #b721ff);
            color: -o-linear-gradient(left, #21d4fd, #b721ff);
            color: -moz-linear-gradient(left, #21d4fd, #b721ff);
            color: linear-gradient(left, #21d4fd, #b721ff);
        }

        .container-login100-form-btn {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-top: 13px;
        }

        .wrap-login100-form-btn {
            width: 100%;
            display: block;
            position: relative;
            z-index: 1;
            border-radius: 25px;
            overflow: hidden;
            margin: 0 auto;
        }

        .login100-form-bgbtn {
            position: absolute;
            z-index: -1;
            width: 300%;
            height: 100%;
            background: #bd454e;
            top: 0;
            left: -100%;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
        }

        .login100-form-btn {
            font-family: Arial;
            font-size: 15px;
            color: #fff;
            line-height: 1.2;
            text-transform: uppercase;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            width: 100%;
            height: 50px;
        }

        .wrap-login100-form-btn:hover .login100-form-bgbtn {
            left: 0;
        }


        @media (max-width: 576px) {
            .wrap-login100 {
                padding: 77px 15px 33px 15px;
            }
        }

        .validate-input {
            position: relative;
        }

        .alert-validate::before {
            content: attr(data-validate);
            position: absolute;
            max-width: 70%;
            background-color: #fff;
            border: 1px solid #c80000;
            border-radius: 2px;
            padding: 4px 25px 4px 10px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 0px;
            pointer-events: none;
            font-family: Arial, Helvetica, sans-serif;
            color: #c80000;
            font-size: 13px;
            line-height: 1.4;
            text-align: left;
            visibility: hidden;
            opacity: 0;
            -webkit-transition: opacity 0.4s;
            -o-transition: opacity 0.4s;
            -moz-transition: opacity 0.4s;
            transition: opacity 0.4s;
        }

        .alert-validate::after {
            content: "\f06a";
            font-family: FontAwesome;
            font-size: 16px;
            color: #c80000;
            display: block;
            position: absolute;
            background-color: #fff;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 5px;
        }

        .alert-validate:hover:before {
            visibility: visible;
            opacity: 1;
        }

        @media (max-width: 992px) {
            .alert-validate::before {
                visibility: visible;
                opacity: 1;
            }
        }
    </style>
</head>

<body>
        <div class="row" style="margin: 2rem;">
            <div style="text-align: right;">
                <img src="images/logo.jpeg" alt="">
            </div>
        </div>
        <div class="row" style="margin: 2rem;">
            <div class="col-12">
                <h5>INFORMACIÓN DE CLIENTE</h5>
            </div>
            <br>
            <div class="col-12">
                <p style="color: black; font-size: 15px;">CLIENTE: {{ $cliente->Nombre}}</p>
            </div>
            <div class="col-12">
                @if($cliente->TipoNit == 'NIT')
                <p style="color: black; font-size: 15px;">DOCUMENTO: {{ $cliente->Nit}}-{{ $cliente->DV}}</p>
                @else
                <p style="color: black; font-size: 15px;">DOCUMENTO: {{ $cliente->Nit}}</p>
                @endif
            </div>
            <div class="col-12">
                <p style="color: black; font-size: 15px;">MOVIL: {{ $cliente->Movil }}</p>
            </div>
            <br><br>
            <div class="col-12">
                <h5>INFORMACIÓN DE DOMICILIO</h5>
            </div>
            <br>
            <div class="col-12">
                <p style="color: black; font-size: 15px;">TELÉFONO: {{ $pedido->Telefono }}</p>
            </div>
            <div class="col-12">
                <p style="color: black; font-size: 15px;">DIRECCION: {{ $pedido->Direccion }}</p>
            </div>
            <br>
            <div class="col-12">
                <h5>INFORMACIÓN DE PEDIDO</h5>
            </div>
            <br>
            <div class="col-12">
                <p style="color: black; font-size: 15px;">NRO PEDIDO: {{ $pedido->Pedido }}</p>
            </div>
            <div class="col-12">
                <p style="color: black; font-size: 15px;">TOTAL: ${{ number_format($pedido->Total) }}</p>
            </div>
            <div class="col-12">
                <p style="color: black; font-size: 15px;">DESCUENTO: ${{ number_format($pedido->Descuento) }}</p>
            </div>
            <div class="col-12">
                <p style="color: black; font-size: 15px;">DESCUENTO: ${{ number_format($pedido->IVA) }}</p>
            </div>
            <div class="col-12">
                <p style="color: black; font-size: 15px;">FEHCA DE PEDIDO: {{ date('Y-m-d', strtotime($pedido->FechaPedido)) }}</p>
            </div>
            <div class="col-12">
                <p style="color: black; font-size: 15px;">FECHA DE VENCIMIENTO: {{ date('Y-m-d', strtotime($pedido->FechaVencimiento)) }}</p>
            </div>
            <br>
            <div class="col-12">
                <h5>REFERENCIAS</h5>
            </div>
            <br>
        </div>
        <div class="row" style="margin: 2rem;">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="text-align: center;">#</th>
                            <th style="text-align: center;">REFERENCIA</th>
                            <th style="text-align: center;">DESCRIPCIÓN</th>
                            <th style="text-align: center;">CANTIDAD</th>
                            <th style="text-align: center;">PRECIO</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($referencias as $key => $r)
                        <tr>
                            <th style="text-align: center;">{{ $key+1 }}</th>
                            <td style="text-align: center;">{{ $r->Referencia }}</td>
                            <td style="text-align: center;">{{ $r->Descripcion }}</td>
                            <td style="text-align: center;">{{ $r->Cantidad }}</td>
                            <td style="text-align: center;">${{ number_format($r->PrecioVenta) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>