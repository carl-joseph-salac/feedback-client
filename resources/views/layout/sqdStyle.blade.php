<style>
    table tr td {
        padding: 4px;
    }

    @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css);

    .container-rating {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        margin-right: 18px
    }

    #rating-value {
        width: 210px;
        margin: 40px auto 0;
        padding: 10px 5px;
        text-align: center;
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

    .rating>label {
        color: #ddd;
        float: right;
        cursor: pointer;
    }

    .rating>input:checked~label,
    .rating:not(:checked)>label:hover,
    .rating:not(:checked)>label:hover~label {
        color: #00fc69;
    }

    .rating>input:checked+label:hover,
    .rating>input:checked~label:hover,
    .rating>label:hover~input:checked~label,
    .rating>input:checked~label:hover~label {
        color: #2ddc76;
    }

    .btn {
        width: 85px;
    }
</style>
