<style>
    table tr td {
        padding: 4px;
    }

    @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css);

    /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
        }

        body {
            font-family: Arial, sans-serif;
        } */

    .container-rating {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    /* .rating-wrap {
            max-width: 480px;
            margin: auto;
            padding: 15px;
            box-shadow: 0 0 3px 0 rgba(0, 0, 0, .2);
            text-align: center;
        } */

    /* .center {
            width: 162px;
            margin: auto;
        } */


    #rating-value {
        width: 210px;
        margin: 40px auto 0;
        padding: 10px 5px;
        text-align: center;
        /* box-shadow: inset 0 0 2px 1px rgba(46, 204, 113, .2); */
    }

    /*styling star rating*/
    .rating {
        border: none;
        float: left;
    }

    .rating>input {
        display: none;
    }

    .rating>label:before {
        content: '\f005';
        font-family: FontAwesome;
        margin: 5px;
        font-size: 2rem;
        display: inline-block;
        cursor: pointer;
    }

    .rating>.half:before {
        content: '\f089';
        position: absolute;
        cursor: pointer;
    }


    .rating>label {
        color: #ddd;
        float: right;
        cursor: pointer;
    }

    .rating>input:checked~label,
    .rating:not(:checked)>label:hover,
    .rating:not(:checked)>label:hover~label {
        color: #2ce679;
    }

    .rating>input:checked+label:hover,
    .rating>input:checked~label:hover,
    .rating>label:hover~input:checked~label,
    .rating>input:checked~label:hover~label {
        color: #2ddc76;
    }
</style>
