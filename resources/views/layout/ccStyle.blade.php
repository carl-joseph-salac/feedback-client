<style>
    table tr td {
        padding: 4px;
    }

    .radios:hover {
        cursor: pointer;
    }

    .btn {
        width: 85px;
    }

    .checkboxes {
        width: 20px;
    }

    .checkboxes input[type="radio"] {
      display: none;
    }

    .checkboxes label {
      display: inline-block;
      width: 20px;
      height: 20px;
      /* background-color: #ffffff00; */
      border: 1px solid #525252;
      border-radius: 4px;
      cursor: pointer;
      margin: 0;
    }

    .checkboxes input[type="radio"]:checked + label::before {
      content: "\2713";
      display: block;
      text-align: center;
      line-height: 20px;
      color: #ff0000;
      font-weight: bold;
    }

    .check-mark::before {
        content: "\2713";
        display: inline-block;
        width: 20px;
        height: 20px;
        text-align: center;
        line-height: 20px;
        color: #ff0000;
        font-weight: bold;
    }

</style>
