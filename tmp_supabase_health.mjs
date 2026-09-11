import { supabase } from './src/supabaseClient.js';

const results = {};

const tableNames = ['studenten', 'inchecken', 'vrijstellingen'];
for (const table of tableNames) {
  const { data, error } = await supabase.from(table).select('*').limit(1);
  results[table] = {
    rows: Array.isArray(data) ? data.length : 0,
    error: error?.message ?? 'none'
  };
}

for (const fn of ['dagoverzicht_vandaag', 'absent_vandaag']) {
  const { data, error } = await supabase.rpc(fn);
  results[fn] = {
    rows: Array.isArray(data) ? data.length : 0,
    error: error?.message ?? 'none'
  };
}

const { data, error } = await supabase.rpc('incheck_student', { student_id: 14 });
results.incheck_student = {
  rows: Array.isArray(data) ? data.length : 0,
  error: error?.message ?? 'none'
};

console.log(JSON.stringify(results, null, 2));
