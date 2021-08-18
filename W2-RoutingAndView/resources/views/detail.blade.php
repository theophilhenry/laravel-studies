<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Menu {{ $category . ' ' . $product }}</title>
</head>

<body>
    <div style="width: 70%; min-width: 400px; max-width: 700px; text-align: center; margin: 0 auto;">
        <h1>{{ ucwords($category) . ' ' . ucwords($product) }}</h1>
        <img src="{{ asset('/images/' . ucwords($category) . ucwords($product) . '.PNG') }}" style="width: 200px;">
        @if ($category == 'pudding')
            <p>Puding adalah sebuah hidangan penutup yang umumnya dibuat dari bahan-bahan yang direbus, dikukus, atau
                dipanggang. Istilah puding juga dapat dipakai untuk berbagai jenis pai yang berisi campuran lemak hewan,
                daging, atau buah-buahan yang dipanggang, direbus, atau dikukus.</p>

            <h3>Detail mengenai {{ $category . ' ' . $product }}</h3>
            @switch($product)
                @case('pannacotta')
                    <p>Pannacotta adalah sebuah dessert yang berasal dari Italy yang merupakan pudding berbahan dasar cream
                        yang
                        dimasak dengan gelatine dan diberi berbagai macam rasa atau saus berry. Pannacotta ini baru dikenal
                        masyarakat Indonesia sejak 2018 saat toko kue ternama menjualnya. Pudding yang memiliki tekstur yang
                        sangat lembut dan rasa yang manis membuat masyarakat Indonesia ketagihan saat menyantapnya.</p>
                @break
                @case('fla')
                    <p>Secara tradisional vla dibuat dari telur, gula dan susu segar, walaupun beberapa produsen besar saat
                        ini
                        menggunakan tepung jagung daripada telur. Vla terdapat dalam berbagai rasa dan vanilla merupakan
                        rasa
                        yang paling populer. Terdapat rasa lain seperti cokelat, karamel, pisang, jeruk, rum, blackcurrant,
                        frambus, arbei, kayu manis, persik dan apel.</p>
                @break

                @case('buah')
                    <p>Puding buah merupakan menu dessert yang cukup populer disajikan dalam berbagai acara. Selain itu,
                        makanan
                        manis yang satu ini juga mudah dibuat serta menggunakan bahan-bahan dengan harga terjangkau yang
                        bisa
                        ditemukan di mana saja.</p>
                @break
            @endswitch
        @elseif ($category == 'roti')
            <p>Roti adalah makanan berbahan dasar utama tepung terigu dan air, yang difermentasikan dengan ragi, tetapi
                ada
                juga yang tidak menggunakan ragi. Namun dengan kemajuan teknologi, manusia membuat roti diolah dengan
                berbagai bahan seperti garam, minyak, mentega, ataupun telur untuk menambahkan kadar protein di dalamnya
                sehingga didapat tekstur dan rasa tertentu. Roti termasuk makanan pokok di banyak negara Barat. Roti
                adalah
                bahan dasar pizza dan lapisan luar roti lapis. Roti biasanya dijual dalam bentuk sudah diiris, dan dalam
                kondisi segar yang dikemas rapi dalam plastik.</p>

            <h3>Detail mengenai {{ $category . ' ' . $product }}</h3>
            @switch($product)
                @case('tawar')
                    <p>Roti tawar memiliki rasa yang tawar yang terbuat dari adonan dengan sedikit gula, lemak, garam, yeast
                        dan
                        dilselesaikan dengan cara dipanggang. Produk roti mempunyai struktur berongga-rongga dan
                        dikembangkan
                        dengan ragi roti dan pada produk akhirnya bersifat plastis, elsatis karena kadar airnya tinggi
                        wahyudi,2003:3. Roti tawar pada umumnya memiliki warna yang putih dengan kandungan gula dan lemak
                        rata-rata dibawah 10 dan berstruktur empuk</p>
                @break
                @case('gandum')
                    <p>Selain sebagai sumber karbohidrat yang cocok untuk sarapan, roti gandum yang terbuat dari biji gandum
                        utuh juga mengandung lebih banyak serat dibanding roti tawar putih. Roti jenis ini diketahui
                        memiliki
                        banyak kandungan nutrisi yang bermanfaat untuk tubuh, seperti protein, antioksidan, mineral termasuk
                        zat
                        besi, magnesium, kalsium, fosfor, kalium, sodium, dan zinc, serta vitamin B, folat, vitamin E, dan
                        vitamin K.</p>
                @break

                @case('coklat')
                    <p>Roti coklat adalah makanan berisi coklat lumer yang terbuat dari bahan-bahan berkualitas tanpa bahan
                        pengawet, bun yang lembut dan rasa yang bekualitas memberikan kepuasan kepada konsumen. </p>
                @break
            @endswitch
        @endif
    </div>
</body>

</html>
