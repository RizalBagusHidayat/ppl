<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat App Template</title>
    <link rel="stylesheet" href="{{ asset("assets/css/chat.css") }}">
</head>
    <header class="">
      @include ('peternak.navbar')  
    </header>
    <body>
        <div class="relative h-full">
            <div id="app" class="app">
                        <!-- LEFT SECTION -->
                
                    <section id="main-left" class="main-left">
                        <!-- header -->
                        
                        <div id="header-left" class="header-left place-items-center text-3xl text-bold">
                                Konsultasi
                        </div>
                
                        <!-- chat list -->
                        <div id="chat-list" class="chat-list">
                            <!-- user lists -->
                            @foreach($data['friends'] as $friend)
                            @php 
                                $avatar = $friend->nama_pengguna.".png";
                            @endphp
                                <div class="friends" data-id="{{ $friend->id_pengguna }}" data-name="{{ $friend->nama_pengguna }}" data-avatar=
                                    "{{ asset("/images"."/".$avatar) }}">
                                    <!-- photo -->
                                    <div class="profile friends-photo">
                                        <img src="{{ asset("/images"."/".$avatar) }}" alt="">
                                    </div>
                
                                    <div class="friends-credent">
                                        <!-- name -->
                                        <span class="friends-name">{{ $friend->nama_pengguna }}</span>
                                        <!-- last message -->
                                        <span class="friends-message friend-status"></span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                
                
                
                    <!-- RIGHT SECTION -->
                    <section id="main-empty" class="main-right place-items-center">
                        <div>
                            <p style="text-align: center; font-size: 30px">Mitra resmi dari Dinas Ketahanan Pangan dan Peternakan Kabupaten Jember</p>
                        </div>
                        <div class="flex">
                            {{-- @foreach($data['friends'] as $friend)
                            <div>
                                <a href="#" class="flex items-center gap-5 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                                    <img class="w-24 h-24 rounded-full" src="{{ asset("/images"."/".$avatar) }}" alt="">
                                    
                                    <div>
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$friend->nama_pengguna}}</h5>
                                        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                    </div>
                                </a>
                            </div>
                            @endforeach --}}
                        </div>
                    </section>
                    <section id="main-right" class="main-right hidden">
                        <!-- header -->
                        <div id="header-right" class="header-right ">
                            <!-- profile pict -->
                            <div id="header-img" class="profile header-img">
                                <img src="{{ asset("assets/images/ava2.jpg") }}" alt="">
                            </div>
                
                            <!-- name -->
                            <h4 class="name friend-name">Mario Gomez</h4>
                        </div>
                
                        <!-- chat area -->
                        <div id="chat-area" class="chat-area">
                            <!-- chat content -->
                
                        </div>
                
                        <!-- typing area -->
                        <div id="typing-area" class="typing-area">
                            <!-- input form -->
                            <input id="type-area" class="type-area" placeholder="Type something...">
                        </div>
                    </section>
                {{-- </div> --}}
                
            </div>
        </div>
    <input type="hidden" name="" id="room-url" value="{{route('room.create')}}">
    <script src="{{ asset("assets/js/chat.js") }}"></script>
    </body>
@vite('/recources/js/app.js')
</html>
