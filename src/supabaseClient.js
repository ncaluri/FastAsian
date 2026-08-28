import { createClient } from '@supabase/supabase-js'

const supabaseUrl = 'https://oqcnrmepzzmyotpeccer.supabase.co'
const supabaseAnonKey = 'sb_publishable_9vPykN5t7iXStdhH23UAYw_MPUPKT44'

export const supabase = createClient(supabaseUrl, supabaseAnonKey)