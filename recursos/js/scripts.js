window.onload = function(e)
                {
                    $("#wrapper").toggleClass("toggled");
                 }

$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});


function Carreras()
{
	$.ajax
            ({
                type: "POST",
                url: "crud/paginaCarreras",
                success: function(jso)
                        {
                            try
                            {     
                                $("#wrapper").toggleClass("toggled");
                                $("#page-content-wrapper").html(jso);                                 
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function getCarrera(id)
{
    $.ajax
            ({
                type: "POST",
                url: "crud/getCarrera",
                data: {'id':id},
                success: function(jso)
                        {
                            try
                            {     
                                $("#div-infoCarrera").html(jso);                                
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function editCarrera(codigo)
{
    $.ajax
            ({
                type: "POST",
                url: "crud/editarCarrera",
                data: {'codigo':codigo},
                success: function(jso)
                        {
                            try
                            {     
                                $("#div-form-carreras").html(jso);                                
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function formCrearCarrera()
{
    $.ajax
            ({
                type: "POST",
                url: "crud/formcrearcarrera",
                success: function(jso)
                        {
                            try
                            {     
                                $("#div-form-carreras").html(jso);                                
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function delCarrera(id)
{
    $.ajax
            ({
                type: "POST",
                url: "crud/eliminarCarrera",
                data: {'id':id},
                success: function(jso)
                        {
                            try
                            {     
                                $("#div-carreras").html(jso);
                                window.formCrearCarrera();                                
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
            
}
<<<<<<< HEAD
//Experiencias educativas
function EE()
{
	$.ajax
            ({
                type: "POST",
                url: "crud/paginaEE",
                success: function(jso)
                        {
                            try
                            {     
                                $("#wrapper").toggleClass("toggled");
                                $("#page-content-wrapper").html(jso);                                 
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function getEE(id)
{
    $.ajax
            ({
                type: "POST",
                url: "crud/getEE",
                data: {'id':id},
                success: function(jso)
                        {
                            try
                            {     
                                $("#div-infoEE").html(jso);                                
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function getCarreraEE(id)
{
    $.ajax
            ({
                type: "POST",
                url: "crud/getCarreraEE",
                data: {'id':id},
                success: function(jso)
                        {
                            try
                            {     
                                $("#div-ee").html(jso);                                
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

// Prevent form submission
$( "form" ).submit(function( event ) {
  event.preventDefault();
});


function editEE(id)
{
    $.ajax
            ({
                type: "POST",
                url: "crud/editarEE",
                data: {'id':id},
                success: function(jso)
                        {
                            try
                            {     
                                $("#div-form-ee").html(jso);                                
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function delEE(id)
{
    $.ajax
            ({
                type: "POST",
                url: "crud/eliminarEE",
                data: {'id':id},
                success: function(jso)
                        {
                            try
                            {     
                                $("#div-ee").html(jso);                                
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
            
}
<<<<<<< HEAD
//Experiencias educativas
function EE()
{
	$.ajax
            ({
                type: "POST",
                url: "crud/paginaEE",
                success: function(jso)
                        {
                            try
                            {     
                                $("#wrapper").toggleClass("toggled");
                                $("#page-content-wrapper").html(jso);                                 
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function getEE(id)
{
    $.ajax
            ({
                type: "POST",
                url: "crud/getEE",
                data: {'id':id},
                success: function(jso)
                        {
                            try
                            {     
                                $("#div-infoEE").html(jso);                                
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function getCarreraEE(id)
{
    $.ajax
            ({
                type: "POST",
                url: "crud/getCarreraEE",
                data: {'id':id},
                success: function(jso)
                        {
                            try
                            {     
                                $("#div-ee").html(jso);                                
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
            
}
<<<<<<< HEAD
//Experiencias educativas
function EE()
{
	$.ajax
            ({
                type: "POST",
                url: "crud/paginaEE",
                success: function(jso)
                        {
                            try
                            {     
                                $("#wrapper").toggleClass("toggled");
                                $("#page-content-wrapper").html(jso);                                 
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function getEE(id)
{
    $.ajax
            ({
                type: "POST",
                url: "crud/getEE",
                data: {'id':id},
                success: function(jso)
                        {
                            try
                            {     
                                $("#div-infoEE").html(jso);                                
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function getCarreraEE(id)
{
    $.ajax
            ({
                type: "POST",
                url: "crud/getCarreraEE",
                data: {'id':id},
                success: function(jso)
                        {
                            try
                            {     
                                $("#div-ee").html(jso);                                
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}
=======
>>>>>>> bf06c066704e35cec9d3c354bdd536517abbc118

// Prevent form submission
$( "form" ).submit(function( event ) {
  event.preventDefault();
});


function editEE(id)
{
    $.ajax
            ({
                type: "POST",
                url: "crud/editarEE",
                data: {'id':id},
                success: function(jso)
                        {
                            try
                            {     
                                $("#div-form-ee").html(jso);                                
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
}

function delEE(id)
{
    $.ajax
            ({
                type: "POST",
                url: "crud/eliminarEE",
                data: {'id':id},
                success: function(jso)
                        {
                            try
                            {     
                                $("#div-ee").html(jso);                                
                            }catch(e)
                            {
                                alert('Exception while resquest...');
                            }                       
                        },
                error:  function()
                        {
                            alert('Error while resquest..');
                        }
            });
            
<<<<<<< HEAD
}
=======
}
=======
=======

>>>>>>> bf619624d892f01a386415cff320cb5ed62c9ae1
>>>>>>> 5cd6bfc06013ac884791a4a45d1b2fad0e31b069
>>>>>>> bf06c066704e35cec9d3c354bdd536517abbc118
