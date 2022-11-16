const deleteResource=(id)=>{

    $(".kodory-dropdown").removeClass("open");
    $(".swal2-styled").css("padding", 0);

    Swal.fire({
      title: 'Delete?',
      text: "Are you sure?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#ed71a3',
      cancelButtonColor: '#71c0ef',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
          proceedToDelete(id);
      }
    })
}

const proceedToDelete=async (id)=>{
  const response= await makeAjaxCall(`/remove_cart/${id}`,'DELETE');
  let carts = JSON.parse(localStorage.getItem('KIDZLOBBY_CARTS'));
  if(response.status==200){
      $(`#resource_${id}`).remove();
      carts = carts.filter(cart => cart.id != id);
      localStorage.setItem("KIDZLOBBY_CARTS", JSON.stringify(carts));
      showSweetAlert('Success',response.message, "success");
  } else{
    if($(`#resource_${id}`)) {
        $(`#resource_${id}`).remove();
    }
    showSweetAlert('Error',response.message);
  }
  $(".count").text(carts.length);
}

const makeAjaxCall=async (url,method="GET")=>{
  console.log($('meta[name="csrf-token"]').attr('content'));
  const deviceId = localStorage.getItem('DEVICE_ID');
  let response = await fetch(url,{
      method: method.toUpperCase(),
      headers: {
          "Content-Type": "application/json",
          "Accept": "application/json",
        //   "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content'),
          "Device-Id": deviceId
      }
  });
  if (response.ok) {
      let json = await response.json();
      return json;
  } else {
      console.log(response);
      showSweetAlert('Error',response.status + ' Internal server error')
      return {status:response.status}
  }
}


const showSweetAlert=(title,message,icon="error")=>{
  Swal.fire(
      title,
      message,
      icon
  );
}
