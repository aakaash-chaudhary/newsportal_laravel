<x-app-layout>
    <x-app-layout>
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4>Category Edit</h4>
                                <a href="{{ route('admin.category.index') }}" class="btn btn-primary">Go back</a>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.category.update', $category->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-6 pb-2">
                                            <label for="name">Enter Category Title</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                value="{{ $category->title }}">
                                            @error('name')
                                                <p>
                                                    <span class="text-danger">{{ $message }}</span>
                                                </p>
                                            @enderror
                                        </div>


                                        <div class="col-6 pb-2">
                                            <label for="name">Change Status</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="1"{{ $category->status == 1 ? 'selected' : '' }}>
                                                    Active</option>
                                                <option value="0"{{ $category->status == 0 ? 'selected' : '' }}>
                                                    Inactive</option>
                                            </select>
                                            @error('status')
                                                <p>
                                                    <span class="text-danger">{{ $message }}</span>
                                                </p>
                                            @enderror
                                        </div>

                                        <div class="col-12 pb-2">
                                            <label for="meta_keywords">Enter Meta Keywords</label>
                                            <textarea name="meta_keywords" id="meta_keywords" class="form-control">
                                                {{ $category->meta_keywords }}
                                        </textarea>
                                        </div>

                                        <div class="col-12 pb-2">
                                            <label for="description">Enter Meta Description</label>
                                            <textarea name="description" id="description" class="form-control">
                                                {{ $category->meta_keywords }}

                                        </textarea>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-danger">Save Record</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-app-layout>

</x-app-layout>
