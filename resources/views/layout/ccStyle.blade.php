<style>
    table tr td {
        padding: 4px;
    }

    .radios:hover {
        cursor: pointer;
    }

    #next {
        width: 63px;
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
      background-color: #fff;
      border: 1px solid #888787;
      border-radius: 4px;
      cursor: pointer;
      margin: 0;
    }
    .checkboxes input[type="radio"]:checked + label::before {
      content: "\2713";
      display: block;
      text-align: center;
      line-height: 20px;
      color: #30ac38;
      font-weight: bold;
    }

    .check-mark::before {
        content: "\2713";
        display: inline-block;
        width: 20px;
        height: 20px;
        text-align: center;
        line-height: 20px;
        color: #30ac38;
        font-weight: bold;
    }
</style>
