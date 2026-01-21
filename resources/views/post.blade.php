@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2>{{ $post->title }}</h2>
        <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a></p>
        <p>Category : <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        {{-- <p>{{ $post->body }}</p> --}}
        {!! $post->body !!}
    </article>

    <a href="/blog" class="text-decoration-none">Back to Blog</a>
@endsection

{{-- App\Models\Category::create([
    'name' => 'Web Programming',
    'slug' => 'web-programming',
])

App\Models\Category::create([
    'name' => 'Web Design',
    'slug' => 'web-design',
])

App\Models\Category::create([
    'name' => 'Personal',
    'slug' => 'personal',
])

App\Models\Post::create([
    'title' => 'Judul Post Kelima',
    'category_id' => 1,
    'slug' => 'judul-post-kelima',
    'author' => 'Azizah Nurul',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius in omnis, labore nemo esse voluptas cum debitis, tempora distinctio quasi velit porro nisi ducimus odio eligendi vel et eveniet aut consequuntur natus assumenda excepturi veritatis incidunt possimus? Nihil excepturi minima,',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius in omnis, labore nemo esse voluptas cum debitis, tempora distinctio quasi velit porro nisi ducimus odio eligendi vel et eveniet aut consequuntur natus assumenda excepturi veritatis incidunt possimus?</p><p>Nihil excepturi minima, numquam vel sint cum mollitia qui ducimus quos earum doloribus adipisci distinctio dolores tenetur temporibus quae non amet aliquam omnis molestias? Temporibus eaque nisi debitis quidem voluptas dolor quam, itaque, placeat hic ullam omnis.</p><p>Fuga nesciunt velit iure, quo quam accusantium qui ratione, dolor, quia similique repudiandae enim eligendi veniam reiciendis aut illum quos temporibus. Optio enim quas voluptas in eum. Sequi beatae incidunt distinctio omnis quidem quaerat perferendis molestiae ut deleniti fuga rerum dolores dolorum impedit voluptas itaque quod, nulla dolore hic consequuntur culpa veniam eos eum quisquam laborum! Porro pariatur eos, sed magni labore autem.</p><p>Reiciendis sapiente ducimus laudantium laborum adipisci dolores. Natus laborum cum provident ad ab ullam aliquam consectetur labore quos alias rerum debitis aut quibusdam officia assumenda modi voluptatum, eveniet sapiente id molestiae! Ipsa eos modi, ex tempore accusantium eaque. Possimus eius voluptatum ipsa, eaque at eos ut aliquid blanditiis qui commodi maiores quam tempora aut, reprehenderit accusantium quae rem unde. Assumenda molestiae eaque eum!</p>',
])

App\Models\Post::create([
    'title' => 'Judul Post Keempat',
    'category_id' => 2,
    'slug' => 'judul-post-keempat',
    'author' => 'Nur Syahreza',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius in omnis, labore nemo esse voluptas cum debitis, tempora distinctio quasi velit porro nisi ducimus odio eligendi vel et eveniet aut consequuntur natus assumenda excepturi veritatis incidunt possimus? Nihil excepturi minima,',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius in omnis, labore nemo esse voluptas cum debitis, tempora distinctio quasi velit porro nisi ducimus odio eligendi vel et eveniet aut consequuntur natus assumenda excepturi veritatis incidunt possimus? Nihil excepturi minima, numquam vel sint cum mollitia qui ducimus quos earum doloribus adipisci distinctio dolores tenetur temporibus quae non amet aliquam omnis molestias? Temporibus eaque nisi debitis quidem voluptas dolor quam, itaque, placeat hic ullam omnis.</p><p>Fuga nesciunt velit iure, quo quam accusantium qui ratione, dolor, quia similique repudiandae enim eligendi veniamreiciendis aut illum quos temporibus. Optio enim quas voluptas in eum. Sequi beatae incidunt distinctio omnis quidem quaerat perferendis molestiae ut deleniti fuga rerum dolores dolorum impedit voluptas itaque quod, nulladolore hic consequuntur culpa veniam eos eum quisquam laborum! Porro pariatur eos, sed magni labore autem.</p><p>Reiciendis sapiente ducimus laudantium laborum adipisci dolores. Natus laborum cum provident ad ab ullam aliquam consectetur labore quos alias rerum debitis aut quibusdam officia assumenda modi voluptatum, eveniet sapiente id molestiae! Ipsa eos modi, ex tempore accusantium eaque. Possimus eius voluptatum ipsa, eaque at eos ut aliquid blanditiis qui commodi maiores quam tempora aut, reprehenderit accusantium quae rem unde. Assumenda molestiae eaque eum!</p>',
])

App\Models\Post::create([
    'title' => 'Judul Post Ketiga',
    'category_id' => 2,
    'slug' => 'judul-post-ketiga',
    'author' => 'Arham Rifandy',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim sequi officiis dolor eaque totam exercitationem aspernatur, natus rerum veritatis quo eum perspiciatis modi id amet in doloribus laboriosam voluptate quisquam sapiente? Iure,',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim sequi officiis dolor eaque totam exercitationem aspernatur, natus rerum veritatis quo eum perspiciatis modi id amet in doloribus laboriosam voluptate quisquam sapiente? Iure, aspernatur neque! Commodi suscipit quae nulla, tenetur perspiciatis ullam quidem et explicabo reiciendis impedit quas cumque omnis, officia eum molestiae odit! Dicta deserunt minima aut debitis repellat ratione error nesciunt numquam ea reiciendis atque, nam necessitatibus doloremque commodi enim voluptatum quia recusandae iste autem eos hic.</p><p>Deserunt recusandae error delectus magnam eos, aut qui verodignissimos, ratione, consequatur quis iure cumque quod quisquam animi quam repellendus? Qui iure porro ratione nemo rerum aperiam officiis deleniti laudantium repudiandae? Vero, laborum exercitationem. Minima illo dolores vero fuga molestias numquam, magni quis enim beatae quas, repudiandae saepe? Quod beatae maxime voluptatibus eius dolore, molestias est praesentium accusamus? Ipsam earum quia voluptate consectetur quam dolore at doloremque? Necessitatibus corrupti sequi corporis assumenda?</p>',
])

App\Models\Post::create([
    'title' => 'Judul Post Kedua',
    'category_id' => 1,
    'slug' => 'judul-post-kedua',
    'author' => 'Budi Santoso',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nesciunt at id deleniti sint, fugiat aliquid doloremque ratione dolorem veniam sapiente deserunt reiciendis voluptas perspiciatis, libero eaque, autem qui. Corrupti placeat laborum vitae molestias cumque,',
    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam nesciunt at id deleniti sint, fugiat aliquid doloremque ratione dolorem veniam sapiente deserunt reiciendis voluptas perspiciatis, libero eaque, autem qui. Corrupti placeat laborum vitae molestias cumque, beatae, soluta ratione fugit est, doloremque sit. Nihil consequuntur quia ut dicta cum quis corrupti, maxime et! Nam quidem iusto ullam accusantium expedita ut, harum ab rem magni animi voluptate deleniti eum velit tenetur non laudantium iste accusamus maiores earum facere blanditiis deserunt. Placeat modi distinctio magni fugiat illum ex accusamus id deserunt sunt et, velit explicabo qui cupiditate exercitationem est reprehenderit ad blanditiis, laboriosam veritatis debitis facilis possimus commodi. Officiis perspiciatis illo consectetur, delectus nostrum modi enim reiciendis eum ab dolorum suscipit, voluptatum pariatur sapiente quidem dolores eius reprehenderit deleniti velit ea harum? Itaque placeat iste praesentium saepe incidunt. Mollitia reiciendis quidem omnis commodi accusamus quae eum magni alias voluptatibus sunt, eius consectetur ex porro non. Voluptatem minima veniam harum dicta, illum, tempora accusamus, quidem perferendis culpa provident quaerat! Quo numquam culpa, eos saepe eveniet voluptas ea veritatis consequunturquasi nesciunt voluptate molestiae, illum, ullam beatae! Ullam quidem doloribus ad! Quia dolore odit expedita molestias, aliquam omnis totam iusto ipsam, accusamus nisi nostrum asperiores!',
])

App\Models\Post::create([
    'title' => 'Judul Post Pertama',
    'category_id' => 3,
    'slug' => 'judul-post-pertama',
    'author' => 'Alfian Ramadhan',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quae tempora assumenda voluptates voluptatum odit saepe ut laboriosam voluptatibus dolores! Ratione consequuntur cupiditate accusantium a error adipisci modi quia necessitatibus tempora porro eius,',
    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quae tempora assumenda voluptatesvoluptatum odit saepe ut laboriosam voluptatibus dolores! Ratione consequuntur cupiditate accusantium a error adipisci modi quia necessitatibus tempora porro eius, in maxime quod labore! Ex possimus magni in quibusdam, quas accusantium labore omnis eius! Laborum fuga tenetur enim, maxime impedit saepe commodi, doloremque obcaecatidelectus cum libero, blanditiis temporibus atque et ipsum possimus repellendus fugit soluta id cupiditate voluptates! Officia, consequatur officiis nulla quod suscipit eum consectetur reiciendis deleniti alias quos quidemasperiores minima quo temporibus ex! Consequuntur ad aliquam beatae hic autem animi numquam quia distinctio?',
]) --}}
