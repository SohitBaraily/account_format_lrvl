<x-page-layout>
    <section>
        <div>
            <table>
                <thead>
                    <tr class="border p-[10px]">
                        <th class="border p-[10px]">date</th>
                        <th class="border p-[10px]">drInput</th>
                        <th class="border p-[10px]">drLF</th>
                        <th class="border p-[10px]">drAmt</th>
                        <th class="border p-[10px]">crInput</th>
                        <th class="border p-[10px]">crLF</th>
                        <th class="border p-[10px]">crAmt</th>
                    </tr>
                </thead>

                @foreach ($acdata as $data)
                    <Tbody>
                        <tr class="border p-[10px]">
                            <td class="border p-[10px]">{{ $data->date }}</td>
                            <td class="border p-[10px]">{{ $data->drInput }}</td>
                            <td class="border p-[10px]">{{ $data->drLF }}</td>
                            <td class="border p-[10px]">{{ $data->drAmt }}</td>
                            <td class="border p-[10px]">{{ $data->crInput }}</td>
                            <td class="border p-[10px]">{{ $data->crLF }}</td>
                            <td class="border p-[10px]">{{ $data->crAmt }}</td>
                        </tr>
                    </Tbody>

                @endforeach
            </table>

        </div>
    </section>
</x-page-layout>
