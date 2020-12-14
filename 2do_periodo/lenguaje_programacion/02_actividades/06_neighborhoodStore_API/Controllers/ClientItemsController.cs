using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using neighborhoodStore.Models;

namespace neighborhoodStore.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class ClientItemsController : ControllerBase
    {
        private readonly ClientContext _context;

        public ClientItemsController(ClientContext context)
        {
            _context = context;
        }

        // GET: api/ClientItems
        [HttpGet]
        public async Task<ActionResult<IEnumerable<ClientItem>>> GetClientItems()
        {
            return await _context.ClientItems.ToListAsync();
        }

        // GET: api/ClientItems/5
        [HttpGet("{id}")]
        public async Task<ActionResult<ClientItem>> GetClientItem(int id)
        {
            var clientItem = await _context.ClientItems.FindAsync(id);

            if (clientItem == null)
            {
                return NotFound();
            }

            return clientItem;
        }

        // PUT: api/ClientItems/5
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPut("{id}")]
        public async Task<IActionResult> PutClientItem(int id, ClientItem clientItem)
        {
            if (id != clientItem.ID)
            {
                return BadRequest();
            }

            _context.Entry(clientItem).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!ClientItemExists(id))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }

            return NoContent();
        }

        // POST: api/ClientItems
        // To protect from overposting attacks, enable the specific properties you want to bind to, for
        // more details, see https://go.microsoft.com/fwlink/?linkid=2123754.
        [HttpPost]
        public async Task<ActionResult<ClientItem>> PostClientItem(ClientItem clientItem)
        {
            _context.ClientItems.Add(clientItem);
            await _context.SaveChangesAsync();

            return CreatedAtAction(nameof(GetClientItem), new { id = clientItem.ID }, clientItem);
        }

        // DELETE: api/ClientItems/5
        [HttpDelete("{id}")]
        public async Task<ActionResult<ClientItem>> DeleteClientItem(int id)
        {
            var clientItem = await _context.ClientItems.FindAsync(id);
            if (clientItem == null)
            {
                return NotFound();
            }

            _context.ClientItems.Remove(clientItem);
            await _context.SaveChangesAsync();

            return clientItem;
        }

        private bool ClientItemExists(int id)
        {
            return _context.ClientItems.Any(e => e.ID == id);
        }
    }
}
