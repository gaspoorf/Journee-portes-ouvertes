@extends("layouts.master-plan")


@section('content')

   <div class="background-plan">
      
      <div class="back-arrow">
         <a class="" href="/carte"><img src="{{ asset('/img/Fleche.svg') }}" alt="fleche retour" width="40px"></a>
      </div>
   

      <div class="flex-center gap2">

         <h1>IUT de Chambéry</h1>
      

         <div class="plan2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 248.97 535.57">
               <defs><style>.cls-1{fill:#b2b2b2;}.cls-2{font-size:17px;fill:#1d1d1b;}.cls-3{letter-spacing:-0.02em;}</style></defs>
               <g id="Calque_2" data-name="Calque 2">
                  
                  <g id="IUT"><path class="cls-1" d="M6.53,248.57H446.82a0,0,0,0,1,0,0v50.72a0,0,0,0,1,0,0H6.1a5.7,5.7,0,0,1-5.7-5.7V254.7A6.13,6.13,0,0,1,6.53,248.57Z" transform="translate(-50.32 497.54) rotate(-90)"/></g>
                  
                  <a xlink:href="/PEC">
                     <g id="PEC" class="room"><path class="cls-1" d="M48,0H237.16A11.81,11.81,0,0,1,249,11.81V50.72a0,0,0,0,1,0,0H47.6A5.7,5.7,0,0,1,41.9,45V6.13A6.13,6.13,0,0,1,48,0Z"/><text class="cls-2" transform="translate(80.98 32.84)">PEC / GCCD</text></g>
                  </a>
                  <a xlink:href="/MMI">
                     <g id="MMI" class="room"><path class="cls-1" d="M46.95,138.33h151.3a0,0,0,0,1,0,0v50.72a0,0,0,0,1,0,0H46.51a5.7,5.7,0,0,1-5.7-5.7V144.46A6.13,6.13,0,0,1,46.95,138.33Z"/><text class="cls-2" transform="translate(110.98 170.08)">MMI</text></g>
                  </a>
                  <a xlink:href="/GACO">
                     <g id="GACO" class="room"><path class="cls-1" d="M46.95,265h151.3a0,0,0,0,1,0,0v50.72a0,0,0,0,1,0,0H46.51a5.7,5.7,0,0,1-5.7-5.7V271.14A6.13,6.13,0,0,1,46.95,265Z"/><path class="cls-1" d="M86.91,320.57h54.27a0,0,0,0,1,0,0v50.72a0,0,0,0,1,0,0H86.48a5.7,5.7,0,0,1-5.7-5.7V326.7A6.13,6.13,0,0,1,86.91,320.57Z" transform="translate(-234.95 456.91) rotate(-90)"/><text class="cls-2" transform="translate(110.98 294.38)">GACO</text></g>
                  </a>
                  <a xlink:href="/SGM">
                     <g id="SGM" class="room"><path class="cls-1" d="M6.13,408H198.25a0,0,0,0,1,0,0v50.72a0,0,0,0,1,0,0H5.7A5.7,5.7,0,0,1,0,453V414.12A6.13,6.13,0,0,1,6.13,408Z"/><path class="cls-1" d="M78.68,471.78h70.73a0,0,0,0,1,0,0V522.5a0,0,0,0,1,0,0H78.25a5.7,5.7,0,0,1-5.7-5.7V477.91A6.13,6.13,0,0,1,78.68,471.78Z" transform="translate(-386.16 608.12) rotate(-90)"/><text class="cls-2" transform="translate(110.98 438.8)">SGM</text></g>
                  </a>
               </g>
            </svg>
         </div>
      </div>
   </div>

@endsection