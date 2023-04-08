
                    <!--Start books-->
    

                    <div class="col-lg-9  content-my-side text-right ">
                        @foreach ($categories as $category)

                        <div class="computer">
                            <h2> قسم ال{{ $category->name }}<i class="fas fa-tv"></i> </h2>
                            <div class="row">
                                
                                    
                                
                                @foreach ($category->books as $book)

                                <div class="col-lg-4 text-center">
                                        
                                    <div class="box">
                                        
                                        <div class="img">
                                            <img src="{{ asset('books/' . $book->image) }}"  class="d-block w-100" alt="">
                                        </div>
                                        <h3>{{ $book->title }}</h3>
                                        <p>{{ $book->content }}</p>
                                        @if (Auth::user())
                                        <a href="{{ url('download/pdf', $book->id) }}">حمل الآن<i class="fas fa-arrow-left"></i></a>
                                            
                                        @else
                                        <a href="{{ url('login') }}">حمل الآن<i class="fas fa-arrow-left"></i></a>
                                            
                                        @endif
                                        
                                    </div>

                                </div>
                                

                                
                                @endforeach

                                {{-- <span style="padding-top: 20px;">
                    
                    
                                    {!! $category->books->withQueryString()->links('pagination::bootstrap-5') !!}
                                </span> --}}
                                
                            </div>
                        </div>

                @endforeach
                        
                    </div>

                    <!--End books-->