Hem utilitzat Laravel per crear el projecte web. �s una framework de php d'alt nivell. En quan a servidor web hem utilitzat l'apache, en el qual hostatjem el projecte Laravel. El front-end tamb� el gestionem mitja�ant Laravel, amb les vistes. Laravel segueix l'esquema Vista-Model-Controlador.

L'apilicaci� t� entorn gr�fic ( la web ) I tamb� una API que retorna les dades amb JSON.

La base de dades �s MSQL , I s'ha creat a partir d'uns models creats al projecte Laravel.


Directoris interessants:

The app Directory :
			- Charts: els gr�fics de temperatura, humitat I pressio
                        - Models
                        - Http/: Controllers/

The database Directory :
			- factories/
                        - migrations/
			- seeds/

The public Directory :
                        -css/, images/

The resources Directory:
		
                        -views/
The routes Directory:
                        
			-api.php
                        -web.php
