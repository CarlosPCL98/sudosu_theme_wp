/** APLICAR CLASES A LOS WIDGETS DEL SIDEBAR**/
    
    //Aplicar clases al Buscador
    const formularioBuscar = document.querySelectorAll('#searchform #s');
    if(formularioBuscar){
        
      for(const iterator of formularioBuscar) {
        iterator.className += 'form-control mb-2';
      }
      
      const botonBuscar = document.querySelectorAll('#searchsubmit');
      for(const iterator of botonBuscar){
        iterator.className += 'btn btn-primary btn-block btn-dark';
      }

    }

    //Aplicar clases a listas (Widget)
    const listWidgetUl = document.querySelectorAll('.bluu_wi ul');
    if(listWidgetUl){
        
      for(const iterator of listWidgetUl) {
        //Da a todas las listas UL del widget la clase list-group
        iterator.className += 'list-group';
        //console.log(iterator);
      }

      //Da a todos los -bluu_wi>ul>il la class list.group-item
      document.querySelectorAll('.bluu_wi ul li a').forEach(item=>{
        item.className += ' list-group-item';
      });

    }
    
    
/** APLICAR CLASES A LOS WIDGETS DEL SIDEBAR**/
    const botonComentarios = document.querySelector('.form-submit #submit');
if(botonComentarios){
  botonComentarios.className = 'btn btn-dark';
}

const inputTextArea = document.querySelector('.comment-form-comment textarea');
if(inputTextArea){
  inputTextArea.className = 'form-control';
  inputTextArea.setAttribute('placeholder', 'Ingresa aquí tu comentario*');
}

const comentariosNuevos = document.querySelector('#commentform');
if(comentariosNuevos
  && comentariosNuevos.querySelector('.comment-form-author label')
  && comentariosNuevos.querySelector('.comment-form-author input')
  && comentariosNuevos.querySelector('.comment-form-email label')
  && comentariosNuevos.querySelector('.comment-form-email input')
  && comentariosNuevos.querySelector('.comment-form-url label')
  && comentariosNuevos.querySelector('.comment-form-url input')
  ){

  comentariosNuevos.querySelector('.comment-form-author label').className = 'd-none';
  comentariosNuevos.querySelector('.comment-form-author input').className = 'form-control';
  comentariosNuevos.querySelector('.comment-form-author input').setAttribute('placeholder', 'Nombre*');

  comentariosNuevos.querySelector('.comment-form-email label').className = 'd-none';
  comentariosNuevos.querySelector('.comment-form-email input').className = 'form-control';
  comentariosNuevos.querySelector('.comment-form-email input').setAttribute('placeholder', 'Email*');

  comentariosNuevos.querySelector('.comment-form-url label').className = 'd-none';
  comentariosNuevos.querySelector('.comment-form-url input').className = 'form-control';
  comentariosNuevos.querySelector('.comment-form-url input').setAttribute('placeholder', 'Sitio web');

}

const botonEditarComentarios = document.querySelectorAll('.comment-edit-link');
if(botonEditarComentarios){
  botonEditarComentarios.forEach(boton => {
    boton.className = 'btn btn-outline-warning btn-sm'
  })
}

const botonResponderComentarios = document.querySelectorAll('.comment-reply-link');
if(botonResponderComentarios){
  botonResponderComentarios.forEach(boton => {
    boton.className = 'btn btn-outline-dark btn-sm'
  })
}

/*Aplicar clases a formulario -> Contacto */
const inputFormContacto = document.querySelectorAll('.wpcf7-form-control');
if(inputFormContacto){
    
  console.log(inputFormContacto);
  for(const iterator of inputFormContacto) {
    //Da a todas las listas UL del widget la clase list-group
    iterator.className += ' form-control';
    //console.log(iterator);
  }
}