<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Documents
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        User
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($documents as $document )
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">{{ $document->filename }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{ $document->user->name }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('documents.download', $document->id) }}" class="inline-flex items-center px-4 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                    Download
                                </a>
                                <form method="POST" action="{{ route('documents.destroy',$document) }}" class="inline-flex items-center">
                                    @csrf
                                    @method('DELETE')
                                    <x-button class="ml-3 bg-red-500">Delete</x-button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    
        
                    <!-- More people... -->
                    </tbody>
                </table>
                <div class="bg-white px-4 py-3 items-center justify-between">{{ $documents->links() }}</div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>