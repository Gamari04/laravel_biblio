
@include('admin.header');
<form action="{{ route('books.update',$book->id) }}" method="POST"
                        enctype="multipart/form-data" class="shadow p-4 rounded mt-5"
                        style="width: 90%; max-width: 50rem;">
                           @csrf
                           @method('PUT')
                        <h1 class="text-center pb-5 display-4 fs-3">
                            Edit the Book
                        </h1>

                        <div class="mb-3">
                            <label class="form-label">Book Title</label>
                            <input type="text" class="form-control border" placeholder="Enter a title"
                                name="title" value="{{ $book->title }}">
                        </div>
 
                        <div class="mb-3">
                            <label class="form-label"> Book Description</label>
                            <textarea class="form-control border" placeholder="Enter a description"
                                name="description" >{{ $book->description}}
                            </textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Book Author</label>
                            <input type="text" class="form-control border" placeholder="Enter the author"
                                name="author" value="{{ $book->author }}">
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Book Genre</label>
                            <input type="text" class="form-control border" placeholder="Enter the genre of the book"
                                name="genre" value="{{ $book->genre }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Publication Year</label>
                            <input type="date" class="form-control border" placeholder="Enter the year of publication"
                                name="publication_year" value="{{ $book->publication_year }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Total Copies</label>
                            <input type="text" class="form-control border" placeholder="Enter..." name="total_copies" value="{{ $book->total_copies }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Available Copies</label>
                            <input type="text" class="form-control border" placeholder="Enter..."
                                name="available_copies" value="{{ $book->available_copies }}">
                        </div>

                        {{-- <div class="mb-3">
                            <label class="form-label"> Book Cover </label>
                            <input type="file" class="form-control border" name="book_cover">
                        </div>

                        <div class="mb-3 ">
                            <label class="form-label"> File </label>
                            <input type="file" class="form-control border" name="file">
                        </div> --}}

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="addBook">Edit Book</button>
                        </div>
                    </form>