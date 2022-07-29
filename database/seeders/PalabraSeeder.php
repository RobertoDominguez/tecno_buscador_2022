<?php

namespace Database\Seeders;

use App\Models\Enlace;
use App\Models\Indice;
use App\Models\Palabra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PalabraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $palabra1=Palabra::create([
            'nombre'=>'uagrm',
            'veces_buscado'=>0
        ]);

        $palabra2=Palabra::create([
            'nombre'=>'facebook',
            'veces_buscado'=>0
        ]);

        $palabra3=Palabra::create([
            'nombre'=>'youtube',
            'veces_buscado'=>0
        ]);

        $palabra4=Palabra::create([
            'nombre'=>'instagram',
            'veces_buscado'=>0
        ]);

        $palabra5=Palabra::create([
            'nombre'=>'tikTok',
            'veces_buscado'=>0
        ]);

        $palabra6=Palabra::create([
            'nombre'=>'Xvideos',
            'veces_buscado'=>0
        ]);

        $palabra7=Palabra::create([
            'nombre'=>'Pornhub',
            'veces_buscado'=>0
        ]);

        $palabra8=Palabra::create([
            'nombre'=>'Animales',
            'veces_buscado'=>0
        ]);

        $palabra9=Palabra::create([
            'nombre'=>'Juegos',
            'veces_buscado'=>0
        ]);

        $palabra10=Palabra::create([
            'nombre'=>'Peliculas',
            'veces_buscado'=>0
        ]);

        $palabra11=Palabra::create([
            'nombre'=>'Series',
            'veces_buscado'=>0
        ]);

        $palabra12=Palabra::create([
            'nombre'=>'Anime',
            'veces_buscado'=>0
        ]);

        $palabra13=Palabra::create([
            'nombre'=>'Futbol',
            'veces_buscado'=>0
        ]);

        $palabra14=Palabra::create([
            'nombre'=>'Deportes',
            'veces_buscado'=>0
        ]);

        $palabra15=Palabra::create([
            'nombre'=>'Tecnologia',
            'veces_buscado'=>0
        ]);

        $palabra16=Palabra::create([
            'nombre'=>'Universidad',
            'veces_buscado'=>0
        ]);

        $palabra17=Palabra::create([
            'nombre'=>'Pollo',
            'veces_buscado'=>0
        ]);

        $palabra18=Palabra::create([
            'nombre'=>'Campeonato',
            'veces_buscado'=>0
        ]);

        $palabra19=Palabra::create([
            'nombre'=>'Champions',
            'veces_buscado'=>0
        ]);

        $palabra20=Palabra::create([
            'nombre'=>'Parques',
            'veces_buscado'=>0
        ]);

        $palabra21=Palabra::create([
            'nombre'=>'Tetris',
            'veces_buscado'=>0
        ]);

        $palabra22=Palabra::create([
            'nombre'=>'Fedora',
            'veces_buscado'=>0
        ]);

        $palabra23=Palabra::create([
            'nombre'=>'Linux',
            'veces_buscado'=>0
        ]);

        $palabra24=Palabra::create([
            'nombre'=>'DevOps',
            'veces_buscado'=>0
        ]);

        $palabra25=Palabra::create([
            'nombre'=>'Ubuntu',
            'veces_buscado'=>0
        ]);

        $palabra26=Palabra::create([
            'nombre'=>'Distribuciones',
            'veces_buscado'=>0
        ]);

        $palabra27=Palabra::create([
            'nombre'=>'Software',
            'veces_buscado'=>0
        ]);

        $palabra28=Palabra::create([
            'nombre'=>'Hardware',
            'veces_buscado'=>0
        ]);

        $palabra29=Palabra::create([
            'nombre'=>'Computacion',
            'veces_buscado'=>0
        ]);

        $palabra30=Palabra::create([
            'nombre'=>'FICCT',
            'veces_buscado'=>0
        ]);

        $palabra31=Palabra::create([
            'nombre'=>'Elecciones',
            'veces_buscado'=>0
        ]);

        $palabra32=Palabra::create([
            'nombre'=>'Santa Cruz',
            'veces_buscado'=>0
        ]);









        $enlace1=Enlace::create([
            'encabezado'=>'Universidad Autónoma Gabriel René Moreno',
            'url'=>'http://www.uagrm.edu.bo',
            'veces_buscado'=>0
        ]);

        Indice::create([
            'id_palabra'=>$palabra1->id,
            'id_enlace'=>$enlace1->id
        ]);
        
        $enlace2=Enlace::create([
            'encabezado'=>'Facebook',
            'url'=>'http://www.facebook.com',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra2->id,
            'id_enlace'=>$enlace2->id
        ]);

        
        $enlace3=Enlace::create([
            'encabezado'=>'YouTube',
            'url'=>'http://www.youtube.com',
            'veces_buscado'=>0
        ]);

        Indice::create([
            'id_palabra'=>$palabra3->id,
            'id_enlace'=>$enlace3->id
        ]);
        
        $enlace4=Enlace::create([
            'encabezado'=>'Instagram',
            'url'=>'http://www.instagram.com',
            'veces_buscado'=>0
        ]);

        Indice::create([
            'id_palabra'=>$palabra4->id,
            'id_enlace'=>$enlace4->id
        ]);

        
        $enlace5=Enlace::create([
            'encabezado'=>'Tiktok',
            'url'=>'http://www.tiktok.com',
            'veces_buscado'=>0
        ]);

        Indice::create([
            'id_palabra'=>$palabra5->id,
            'id_enlace'=>$enlace5->id
        ]);
        
        $enlace6=Enlace::create([
            'encabezado'=>'Xvideo-FreePorn',
            'url'=>'http://www.xvideos.es',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra6->id,
            'id_enlace'=>$enlace6->id
        ]);

        
        $enlace7=Enlace::create([
            'encabezado'=>'PornHub-sexvideos',
            'url'=>'http://www.pornhub.com',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra7->id,
            'id_enlace'=>$enlace7->id
        ]);

        
        $enlace8=Enlace::create([
            'encabezado'=>'Animales-National Geografic',
            'url'=>'http://www.AnimalesNationalGeografic.com.es',
            'veces_buscado'=>0
        ]);

        Indice::create([
            'id_palabra'=>$palabra8->id,
            'id_enlace'=>$enlace8->id
        ]);
        
        $enlace9=Enlace::create([
            'encabezado'=>'animalies-Wiki',
            'url'=>'http://es.wikipedia.org',
            'veces_buscado'=>0
        ]);

        Indice::create([
            'id_palabra'=>$palabra9->id,
            'id_enlace'=>$enlace9->id
        ]);
        
        $enlace10=Enlace::create([
            'encabezado'=>'Juegos-XBOX',
            'url'=>'http://www.xbox.com',
            'veces_buscado'=>0
        ]);

        Indice::create([
            'id_palabra'=>$palabra9->id,
            'id_enlace'=>$enlace10->id
        ]);

        $enlace11=Enlace::create([
            'encabezado'=>'PlayStation@Network',
            'url'=>'http://www.playstation.com',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra9->id,
            'id_enlace'=>$enlace11->id
        ]);

        $enlace12=Enlace::create([
            'encabezado'=>'Juegos-PS',
            'url'=>'http://www.playstation.com',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra9->id,
            'id_enlace'=>$enlace12->id
        ]);

        $enlace13=Enlace::create([
            'encabezado'=>'Peliculas gratis',
            'url'=>'http://ww3.cuevana.pro',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra10->id,
            'id_enlace'=>$enlace13->id
        ]);

        $enlace14=Enlace::create([
            'encabezado'=>'Cine y peliculas',
            'url'=>'http://www.sensacine.com',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra10->id,
            'id_enlace'=>$enlace14->id
        ]);

        $enlace15=Enlace::create([
            'encabezado'=>'CineMark-Bolivia',
            'url'=>'http://www.cinemark.com.bo',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra10->id,
            'id_enlace'=>$enlace15->id
        ]);

        $enlace16=Enlace::create([
            'encabezado'=>'series-Sensacine',
            'url'=>'http://www.sensacine.com',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra11->id,
            'id_enlace'=>$enlace16->id
        ]);

        $enlace17=Enlace::create([
            'encabezado'=>'Netflix',
            'url'=>'http://www.netflix.com',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra11->id,
            'id_enlace'=>$enlace17->id
        ]);

        $enlace18=Enlace::create([
            'encabezado'=>'Amazon-prime',
            'url'=>'http://www.amazonprime.com',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra11->id,
            'id_enlace'=>$enlace18->id
        ]);

        $enlace19=Enlace::create([
            'encabezado'=>'ANIME Onegai',
            'url'=>'http://www.animeonegai.com',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra12->id,
            'id_enlace'=>$enlace19->id
        ]);

        $enlace20=Enlace::create([
            'encabezado'=>'Futbol-Wikipedia',
            'url'=>'http://es.wikipedia.org',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra13->id,
            'id_enlace'=>$enlace20->id
        ]);

        Indice::create([
            'id_palabra'=>$palabra14->id,
            'id_enlace'=>$enlace20->id
        ]);

        $enlace21=Enlace::create([
            'encabezado'=>'UEFA Champions League',
            'url'=>'http://es.uefa.com',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra13->id,
            'id_enlace'=>$enlace21->id
        ]);
        Indice::create([
            'id_palabra'=>$palabra14->id,
            'id_enlace'=>$enlace21->id
        ]);

        $enlace22=Enlace::create([
            'encabezado'=>'Parques y atracciones naturales',
            'url'=>'http://www.tripadvisor.com',
            'veces_buscado'=>0
        ]);

        $enlace23=Enlace::create([
            'encabezado'=>'La tecnologia',
            'url'=>'http://www.edu.xunta.gal',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra15->id,
            'id_enlace'=>$enlace23->id
        ]);

        $enlace24=Enlace::create([
            'encabezado'=>'UTEPSA-Universidad Tecnologica Privada de Santa Cruz de la Sierra',
            'url'=>'http://www.utepsa.edu',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra16->id,
            'id_enlace'=>$enlace24->id
        ]);

        $enlace25=Enlace::create([
            'encabezado'=>'UTEPSA-Universidad Privada de Santa Cruz de la Sierra',
            'url'=>'http://www.upsa.edu',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra16->id,
            'id_enlace'=>$enlace25->id
        ]);


        $enlace26=Enlace::create([
            'encabezado'=>'Univalle-para toda la vida',
            'url'=>'http://www.univalle.edu',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra16->id,
            'id_enlace'=>$enlace25->id
        ]);



        $enlace27=Enlace::create([
            'encabezado'=>'Universidad Nur',
            'url'=>'http://www.nur.edu',
            'veces_buscado'=>0
        ]);

        Indice::create([
            'id_palabra'=>$palabra16->id,
            'id_enlace'=>$enlace27->id
        ]);


        $enlace28=Enlace::create([
            'encabezado'=>'Receta de como hacer un buen pollo',
            'url'=>'http://www.quericavida.com',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra17->id,
            'id_enlace'=>$enlace28->id
        ]);


        $enlace29=Enlace::create([
            'encabezado'=>'Fedora',
            'url'=>'http://getfedora.org',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra22->id,
            'id_enlace'=>$enlace29->id
        ]);


        $enlace30=Enlace::create([
            'encabezado'=>'Fedora documentation',
            'url'=>'http://docs.fedoraproject.org',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra22->id,
            'id_enlace'=>$enlace30->id
        ]);

        $enlace31=Enlace::create([
            'encabezado'=>'Fedora - DistroWatch',
            'url'=>'http://distrowatch.com',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra22->id,
            'id_enlace'=>$enlace31->id
        ]);

        $enlace32=Enlace::create([
            'encabezado'=>'Wikipedia',
            'url'=>'http://es.wikipedia.org',
            'veces_buscado'=>0
        ]);


        $enlace33=Enlace::create([
            'encabezado'=>'GNU/Linux',
            'url'=>'http://www.linux.org',
            'veces_buscado'=>0
        ]);

        $enlace34=Enlace::create([
            'encabezado'=>'',
            'url'=>'',
            'veces_buscado'=>0
        ]);

        $enlace35=Enlace::create([
            'encabezado'=>'¿que es DevOps y para que sirve?',
            'url'=>'http://www.netapp.com',
            'veces_buscado'=>0
        ]);

        $enlace36=Enlace::create([
            'encabezado'=>'Ubuntu - Enterprise Open Source',
            'url'=>'http://ubuntu.com',
            'veces_buscado'=>0
        ]);

        $enlace37=Enlace::create([
            'encabezado'=>'Software - que es?',
            'url'=>'concepto.de',
            'veces_buscado'=>0
        ]);

        $enlace38=Enlace::create([
            'encabezado'=>'Significado de Software',
            'url'=>'http://www.significados.com',
            'veces_buscado'=>0
        ]);

        $enlace39=Enlace::create([
            'encabezado'=>'Cursos PreUniversitarios FICCT-UAGRM',
            'url'=>'http://adminision.ficct.uagrm.edu.bo',
            'veces_buscado'=>0
        ]);
        Indice::create([
            'id_palabra'=>$palabra1->id,
            'id_enlace'=>$enlace39->id
        ]);

        $enlace40=Enlace::create([
            'encabezado'=>'Elecciones en el Pais - Bolivia',
            'url'=>'http://elpais.com',
            'veces_buscado'=>0
        ]);

        $enlace41=Enlace::create([
            'encabezado'=>'Santa Cruz de la Sierra-Wikipedia',
            'url'=>'http://es.wikipedia.org/wiki/Santa_Cruz_de_la_Sierra',
            'veces_buscado'=>0
        ]);

        $enlace42=Enlace::create([
            'encabezado'=>'Noticia de elecciones',
            'url'=>'http://eldeber.com.bo',
            'veces_buscado'=>0
        ]);





    }
}
