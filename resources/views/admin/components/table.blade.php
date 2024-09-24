<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Serial</th>
                    <th class="px-4 py-3">Orignal URL</th>
                    <th class="px-4 py-3">Short URL</th>
                    <th class="px-4 py-3">COUNT</th>
                    <th class="px-4 py-3">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @forelse ($shortUrls as $key=> $shortUrl)
                    @php
                        $visiturl = $shortUrlVisit->where('short_url_id', $shortUrl->id)->count();
                    @endphp
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-sm">
                            {{ ++$key }}
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <a href="{{ $shortUrl->destination_url }}" target="_blank">
                                {{ $shortUrl->destination_url }}</a>
                        </td>
                        <td class="px-4 py-3 text-xs">
                            <a href="{{ $shortUrl->default_short_url }}" target="_blank">
                                {{ $shortUrl->default_short_url }}</a>
                        </td>
                        <td class="px-4 py-3 text-xs">
                            {{ $visiturl }}
                        </td>
                        <td class="px-4 py-3 text-sm">

                            <a href="{{ route('admin.short_url.delete', $shortUrl->id) }}"
                                class="px-3 py-2 text-white bg-yellow-700 rounded-md">Delete</a>
                        </td>
                    </tr>
                @empty
                @endforelse

            </tbody>
        </table>
    </div>

</div>
