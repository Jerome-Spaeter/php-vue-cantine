<template>
<Transition name="modal">
    <div v-if="show" class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container">
          <div class="modal-header">
              <h3>Etes-vous sûr de vouloir refuser la demande de "{{ userName.toUpperCase() }}" ?</h3>
          </div>
          <div class="modal-footer">
            <slot name="footer">
              <button
                class="modal-default-button"
                @click="$emit('confirm', userId )"
              >CONFIRMER</button>
              <button
                class="modal-default-button"
                @click="$emit('cancel')"
              >ANNULER</button>
            </slot>
          </div>
        </div>
      </div>
    </div>
  </Transition>
</template>
<script>
export default {
    name: 'modal',
    props: {
    show: Boolean,
    userId: Number,
    userName: String
  }
}
</script>

<style>
*{
  user-select: none;
}
  .modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #11ffee00;
  display: table;
  transition: opacity 0.3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  width: 600px;
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #F2F2F2;
  border-radius: 30px;
  transition: all 0.3s ease;
  border: 5px solid rgb(218, 218, 218);
}

.modal-header h3 {
  text-align: center;
  margin-top: 0;
  line-height: 1.5rem;
  color: black;
}

.modal-footer {
  display: flex;
  justify-content: space-evenly;
}

.modal-default-button {
  cursor: pointer;
  font-weight: 800;
  text-align: center;
  color: white;
  padding: 0.8rem;
  margin: 1rem 1rem;
  border-radius: 30px;
  box-shadow: #c5d0c6 1.95px 1.95px 2.6px;
  background-color: #FFBF38;
  border: none;
}

.modal-default-button:hover {
  background-color: #FFDC92;
}

/*
 * Styles appliqués via l'élément <transition> 
 */
.modal-enter-from {
  opacity: 0;
}

.modal-leave-to {
  opacity: 0;
}

.modal-enter-from .modal-container,
.modal-leave-to .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
@media only screen and (min-width: 426px)  and (max-width: 1220px){
   *{
  user-select: none;
}
  .modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #11ffee00;
  display: table;
  transition: opacity 0.3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  width: 400px;
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 30px;
  transition: all 0.3s ease;
}

.modal-header h3 {
  text-align: center;
  margin-top: 0;
  line-height: 1.5rem;
  color: black;
}

.modal-footer {
  display: flex;
  justify-content: space-evenly;
}

.modal-default-button {
  cursor: pointer;
  font-weight: bold;
  text-align: center;
  color: white;
  padding: .5rem;
  margin: 1rem 1rem;
  border-radius: 30px;
  box-shadow: #c5d0c6 1.95px 1.95px 2.6px;
  background-color: #FFBF38;
}

.modal-default-button:hover {
  color: white;
  background-color: #FFDC92;
}
.modal-enter-from {
  opacity: 0;
}

.modal-leave-to {
  opacity: 0;
}

.modal-enter-from .modal-container,
.modal-leave-to .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
}
@media only screen and (max-width: 425px){
  *{
  user-select: none;
}
  .modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #11ffee00;
  display: table;
  transition: opacity 0.3s ease;
}

.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}

.modal-container {
  width: 180px;
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 30px;
  transition: all 0.3s ease;
}

.modal-header h3 {
  text-align: center;
  margin-top: 0;
  line-height: 1.5rem;
  color: black;
}

.modal-footer {
  display: flex;
  justify-content: space-evenly;
}

.modal-default-button {
  cursor: pointer;
  font-weight: bold;
  text-align: center;
  color: white;
  padding: .5rem;
  margin: 1rem 1rem;
  border-radius: 30px;
  box-shadow: #c5d0c6 1.95px 1.95px 2.6px;
  background-color: #FFBF38;
}

.modal-default-button:hover {
  color: white;
  background-color: #FFDC92;

}
.modal-enter-from {
  opacity: 0;
}

.modal-leave-to {
  opacity: 0;
}

.modal-enter-from .modal-container,
.modal-leave-to .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
}
</style>